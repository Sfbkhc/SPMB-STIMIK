<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home | PMB STIMIK',
            'viewport' => false
        ];
        return view('/pages/home', $data);
    }


    public function login(): string
    {

        $data = [
            'title' => 'Login | PMB STIMIK',
            'viewport' => false
        ];
        return view('/pages/login', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'PMB STIMIK',
            'viewport' => true
        ];
        return view('/pages/dashboard', $data);
    }
}
