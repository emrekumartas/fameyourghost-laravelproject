<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function update(Request $request)
    {
    dd($request->all());
    }
    public function updateAll(Request $request)
    {
        dd($request->all());
    }
    public function delete(Request $request)
    {
        dd("User ID to be deleted: " . $request->id);
    }
    public function show(Request $request, $id)
    {
        dd($id);
    }
    public function showName(Request $request, $name)
    {
        dd($name);
    }
    public function roleCheck($role)
    {
    dd($role);
    }

}
