<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

use App\Models\User;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        // dd(Session::all());

        $data = [];

        if($request->post('_token')){
            $user = $this->userAuth($request->post('username'), $request->post('password'));
            if($user){
                return $this->sessionAuth($user);
            }else{
                $data['alert'] = 'Invalid Credentials';
            }
        }

        echo view('login', $data);
    }

    public function userAuth($username, $password)
    {
        $user = User::where('username', $username)->first();
        if ($user != null && Hash::check($password, $user->password)){
            return $user;
        }else{
            return false;
        }
    }

    public function sessionAuth($user)
    {
        Session::flush();
        Session::put([
            'user_id' => $user->id,
            'user_username' => $user->username,
            'logged_in' => true,
        ]);
        Session::save();

        return redirect('../');

    }

    public function Logout()
    {
        Session::flush();
        Session::save();
        header("Location: ../");
        exit();
    }
}