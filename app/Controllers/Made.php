<?php

namespace App\Controllers;

class Made extends BaseController
{
    public function index()
    {
        return view('test');
    }
    public function halaman($nama,$nim)
    {
        return ("nama saya $nama nim saya $nim");
    }
}
