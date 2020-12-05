<?php

namespace App\Http\Controllers;

class DwifitryController extends Controller
{
    public function one()
    {
        return view("dwifitry-1");
    }

    public function two()
    {
        return view("dwifitry-2");
    }

    public function three()
    {
        return view("dwifitry-3");
    }
    public function index()
    {
    return view("test-tema"); // view dengan template
    } 
}

