<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'Mochammad Zakaro Al Fajri, 2241720175';
    }
    public function articles($id)
    {
        return 'Halaman Artikel dengan ID '.$id;
    }
}
