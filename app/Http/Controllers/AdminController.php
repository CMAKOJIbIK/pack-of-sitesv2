<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {

        $true_password = session('save_password');

        if ($true_password) {
            return view("admin");
        } else {
            return view("password_admin");
        }


    }

    public function password_admin(Request $request)
    {
        $user_password = $request->input('password');
        $true_password = "qwerty";
        $password_admin = 'save_password';
        if (session('save_password') == true) {
            session(['save_password' => true]);

            return redirect("admin");
        } else if ($user_password === "") {
            echo "<h2>Введите пароль</h2>";
        } else {
            echo "<h2>Вы ввели не правильный пароль</h2>";

        }
        return redirect("admin");
    }
}
