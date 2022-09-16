<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    function showAdminBeranda()
    {
        return view('admin/AdminBeranda');
    }

    function showAdminProduk()
    {
        return view('admin/AdminProduk');
    }

    function showAdminUser()
    {
        return view('admin/AdminUser');
    }

    function showAdminKategori()
    {
        return view('admin/AdminKategori');
    }

    function showAdminPelanggan()
    {
        return view('admin/AdminPelanggan');
    }

    function showAdminPromo()
    {
        return view('admin/AdminPromo');
    }

    function showAdminSuplier()
    {
        return view('admin/AdminSuplier');
    }

    function showlogin()
    {
        return view('login');
    }
}
