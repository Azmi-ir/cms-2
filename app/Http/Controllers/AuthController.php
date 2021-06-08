<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }    

    public function postlogin(Request $request)
    {
    	if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
    	}
    	return redirect()->back();
    }

    public function register()
    {
        return view('auth.daftar');
    }

    public function postregister (Request $request)
    {
        $this->validate($request, [
    'name' => 'required|min:6',
    'email' => 'required|email|unique:users',
    'level' => 'required',
    'password' => 'required|min:8|confirmed'
    ]);
    
    User::create([
        'name' =>$request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'level' => $request->level
        ]);

        return redirect('/list_user')->with('status', 'User berhasil di tambahkan');;
     }

     public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function list_user()
    {
        $user = User::orderBy('level')->paginate(10);
        return view('auth.list_user', compact('user'));
    }


    //-->Fungsi Edit User

    public function edit(User $User)
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);

            if ($user) {
            return view('auth.edit')->withUser($user);
            } else {
            return redirect()->back();
            } 
        } else {
            return redirect()->back();
        } 

    }

    public function update(Request $request)
    {
       $user = User::find(Auth::user()->id);
        if ($user) {
            if (Auth::user()->email === $request['email']) {
            $validate = $request->validate([
                'name' => 'required|min:6',
                'email' =>'required|email'
                ]);
        
            } else {
                $validate = $request->validate([
                'name' => 'required|min:6',
                'email' =>'required|email|unique:users'
                ]);
            }

            $user->name = $request['name'];
            $user->email = $request['email'];

            $user->save();
        } else {
            return redirect()->back();
        }

        return redirect()->back()->with('status', 'Data berhasil di ubah');
    }


    //-->fungsi ganti password

    public function passwordEdit()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            return view('auth.passwordEdit')->withUser($user);    
        } else {
            return redirect()->back();
        }    
    }
    public function passwordUpdate(Request $request)
    {

        $validate = $request->validate([
                'oldpassword' => 'required|min:8',
                'password' =>'required|min:8',
                'password_confirmation' => 'same:password'
                ]);

        $user = User::find(Auth::user()->id);

        if ($user) {
            if (Hash::check($request['oldpassword'], $user->password) && $validate) {
                $user->password = Hash::make($request['password']);
                $user->save();
                $request->session();
                return redirect('user/editpassword')->with('status', 'password berhasil di ubah');
            } else {
                $request->session();
                return redirect('user/editpassword')->with('error', 'password yang anda masukan tidak cocok');
            }
        }
    }

   //--> Fungsi Delete User
     public function destroy($id)
    {
        $user = User::find($id);
        user::destroy($user->id);
        return redirect('/list_user')->with('status', 'Data berhasil di hapus');
    }


}
