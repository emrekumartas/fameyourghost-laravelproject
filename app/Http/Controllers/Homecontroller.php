<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Homecontroller extends Controller
{
    public function index()
    {
        return view("front.index");
    }

    public function about()
    {
       return redirect(route("contact"));
    }
    public function contact()
    {
        return view("front.contact");
    }

}
