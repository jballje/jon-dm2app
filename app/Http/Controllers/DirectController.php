<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectController extends Controller
{
    function index()
    {
        return view('home');
    }

    function list()
    {
        return view('list');
    }

    function upload()
    {
        return view('upload');
    }

    function details()
    {
        return view('details');
    }
}
