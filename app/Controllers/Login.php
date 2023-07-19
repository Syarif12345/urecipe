<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function masuk()
    {
        $users = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();

        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                if ($dataUser->level == 'admin') {
                    session()->set([
                        'username' => $dataUser->username,
                        'level' => $dataUser->level,
                        'nama' => $dataUser->nama,
                        'id_user' => $dataUser->id_user,
                        'logged_in' => TRUE
                    ]);
                    return redirect()->to(base_url('admin/admin'));
                } elseif ($dataUser->level == 'user') {
                    session()->set([
                        'username' => $dataUser->username,
                        'level' => $dataUser->level,
                        'nama' => $dataUser->nama,
                        'id_user' => $dataUser->id_user,
                        'logged_in' => TRUE
                    ]);
                    return redirect()->to(base_url('home/index'));
                } else {
                    $session = session();
                    // Invalid user level
                    session()->setFlashdata('error', 'Invalid user level');
                    return redirect()->to(base_url('login/index'));
                }
            } else {
                $session = session();
                $session->setFlashdata('salahpw', '<div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <i class="icon-line-lock"></i>Maaf, Password Anda Salah<br>Silahkan coba kembali.</a>
                            </div>');
                return redirect()->to(base_url('login/index'));
            }
        } else {
            $session = session();
            $session->setFlashdata('salah', '<div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <i class="icon-line-lock"></i>Maaf, Username & Password Anda Salah<br>Silahkan coba kembali.</a>
                            </div>');
            return redirect()->to(base_url('login/index'));
        }        
    }
    
    public function index()
    {
        return view('login');
    }
    
    // public function process()
    // {
    //     $user = new UserModel();
    //     $email = $this->request->getVar('username');
    //     $password = $this->request->getVar('password');
    //     $dataUser = $user->where([
    //         'username' => $username,
    //     ])->first();
    //     if ($dataUser) {
    //         if (password_verify($password, $dataUser->password)) {
    //             session()->set([
    //                 'username' => $dataUser->username,
    //                 'name' => $dataUser->name,
    //                 'logged_in' => TRUE
    //             ]);
    //             return redirect()->to(base_url('home'));
    //         } else {
    //             session()->setFlashdata('error', 'Email & Password Salah');
    //             return redirect()->back();
    //         }
    //     } else {
    //         session()->setFlashdata('error', 'Email & Password Salah');
    //         return redirect()->back();
    //     }
    // }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('home/index');
    }

    public function register(){
        return view('register');
    }

    public function proses_register(){
         // Load the UserModel
        $userModel = new UserModel();

        // Get the form input data
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $nama = $this->request->getPost('nama');

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Create an array of data to insert into the database
        $userData = [
            'username' => $username,
            'password' => $hashedPassword,
            'nama' => $nama,
            'level' => 'user' // Assuming 'level' field is required and defaulting to 'user'
        ];

        // Insert the data into the database
        $userModel->insert($userData);

        // Redirect to a success page or perform any additional actions
        return redirect()->to('login/index');
    }

}
