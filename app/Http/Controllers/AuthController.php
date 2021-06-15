<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use illuminate\Validation\Rule;


class AuthController extends Controller
{
    public function register(Request $request)
    {

        $request->validate(
            [
                'nama' => 'required',
                'email' => 'required|unique:users,email',
                'phone' => 'required',
                'password' => 'required|min:6',
                'confirm-pass' => 'required|min:6|same:password'
            ],
            [
                'nama.required' => 'Please input your name.',
                'email.required' => 'Please input your email',
                'email.unique' => 'Email has already taken, please input another email',
                'phone.required' => 'Please input your phone number',
                'password.required' => 'Please input your password',
                'confirm-pass.required' => 'Please input your confirmation password',
                'confirm-pass.same' => "Confirmation password don't match with password"

            ]
        );

        DB::table('users')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => password_hash($request->password, PASSWORD_DEFAULT),
        ]);

        $request->session()->flash('register', 'Register Success!');
        
            // $report = new AuthController();
            $content = new Request();
            $content = $request;
            return $this->login($content);
        
        // return redirect('login');
    }

    public function login(Request $request)
    {

        $log = DB::table('users')->where('email', $request->email)->first();
        // $user = Auth::id();
        // $currentUser = DB::table('users')->find($user);
        $logUser = $log->nama;

        if ($log) {
            if (Hash::check($request->password, $log->password)) {
                session(['success' => true]);
                session(['user' => $logUser]);
                // $userSession = $request->session->put('user', $log->nama);
                return redirect('/');
                // return ($log->email);
                // return ($logSession);
            }
        }

        $request->session()->flash('login', 'Wrong password or email! Please check your email or password again');
        return redirect('login');
    }

    public function adminLogin(Request $request)
    {
        $log = DB::table('users')->where('id', '5')->first();

        if ($log) {
            if (Hash::check($request->password, $log->password)) {
                session(['admin' => true]);
                return redirect('/admin');
            }
        }

        $request->session()->flash('login', 'Wrong password or email! Please check your email or password again');
        return redirect('admin-login');
    }


    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }

    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/admin/users');
    }
}
