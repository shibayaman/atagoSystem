<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;


class ItemController extends Controller
{
    // public function create()
    // {
    //     //
    // }

    // public function store(Request $request)
    // {
    //     //
    // }
    public function getItem(item $item) {
        return $item;
    }

    public function show($id)
    {
        return view('itemdetail')->withId($id);
    }

    // public function edit($id)
    // {
    //     //
    // }

    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // public function destroy($id)
    // {
    //     //
    // }
}
