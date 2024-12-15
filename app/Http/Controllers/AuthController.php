<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user) {
            if ($user->level == 'admin') {
                return redirect()->intended('admin');
            } else if ($user->level == 'user') {
                return redirect()->intended('/');
            }
        }
        return view('login');
    }
    public function proses_login(Request $request)
    {
        $request->validate([
            'username' => 'required|alpha_num|min:5|max:15',
            'password' => 'required|min:6|max:15'
        ],[
            'username.min'=>'Username minimal 5 karakter',
            'username.max'=>'Username maksimal 15 karakter',
            'username.alpha_num'=>'Username hanya bisa angka dan huruf',
            'password.min'=>'Minimal Password 6 Karakter',
            'password.max'=>'Maksimal Password 10 Karakter',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $user =  Auth::user();
            if ($user->level == 'admin') {
                return redirect()->intended('admin');
            } else if ($user->level == 'user') {
                return redirect()->intended('/');
            }
        }
        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'Periksa kembali Username dan Password anda']);
    }
    public function register()
    {
        return view('register');
    }

    public function proses_register(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'username' => 'required|alpha_num|min:5|max:15|unique:users,username',
            'email' => 'required|email',
            'no_WA' => 'required',
            'password' => 'required|min:6|max:10'
        ],[
            'username.min'=>'Username minimal 5 karakter',
            'username.max'=>'Username maksimal 15 karakter',
            'username.alpha_num'=>'Username hanya bisa angka dan huruf',
            'username.unique'=>'Username sudah di gunakan',
            'password.min'=>'Minimal Password 6 Karakter',
            'password.max'=>'Maksimal Password 10 Karakter',
        ]);

        $request['level'] = 'user';
        $request['password'] = bcrypt($request->password);
        $request['tgl_pendaftaran'] = Carbon::now();

        User::create($request->all());

        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}
