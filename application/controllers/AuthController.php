<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set(['user_id' => $user['id'], 'logged_in' => true]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Username atau Password salah');
        }
    }

    public function register()
    {
        return view('register');
    }

    public function registerSubmit()
    {
        $model = new UserModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'email' => $this->request->getVar('email'),
        ];
        $model->save($data);
        return redirect()->to('/login');
    }

    public function dashboard()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('dashboard', ['username' => session('username')]);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
