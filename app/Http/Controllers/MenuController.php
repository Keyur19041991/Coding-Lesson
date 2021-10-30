<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index() {
        $parentMenus = Menu::with('children')->whereNull('parent_id')->get();
        $allMenus = Menu::all();
        return view('menus', compact('parentMenus', 'allMenus'));
    }

    public function store(Request $request) {
        Menu::create($request->all());
        return redirect()->back();
    }
}
