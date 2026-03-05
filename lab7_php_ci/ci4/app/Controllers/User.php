<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    // Halaman utama user (redirect ke login)
    public function index()
    {
        return redirect()->to('/login');
    }

    // Menampilkan Halaman Login
    public function login()
    {
        return view('user/login', [
            'title' => 'Login System'
        ]);
    }

    // Proses Verifikasi Login
    public function loginProcess()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Cari user berdasarkan username
        $data = $model->where('username', $username)->first();

        if ($data) {
            $passInDb = $data['password'];

            // VERIFIKASI PASSWORD (Mencocokkan input dengan Hash di DB)
            if (password_verify($password, $passInDb)) {

                // Jika cocok, buat Session
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'role' => $data['role'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);

                // REDIRECT BERDASARKAN ROLE
                if ($data['role'] == 'admin') {
                    return redirect()->to('/admin/artikel');
                } else {
                    return redirect()->to('/artikel');
                }

            } else {
                // Jika password salah
                $session->setFlashdata('msg', 'Password Salah!');
                return redirect()->to('/login');
            }
        } else {
            // Jika username tidak ada
            $session->setFlashdata('msg', 'Username tidak ditemukan!');
            return redirect()->to('/login');
        }
    }

    // Menampilkan Halaman Register
    public function register()
    {
        return view('user/register', [
            'title' => 'Daftar Akun Baru'
        ]);
    }

    // Proses Pendaftaran Akun
    public function registerProcess()
    {
        $model = new UserModel();

        $data = [
            'username' => $this->request->getVar('username'),
            // Mengenkripsi password sebelum disimpan ke DB
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role' => 'user'
        ];

        $model->save($data);
        return redirect()->to('/login');
    }

    // Proses Logout
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}