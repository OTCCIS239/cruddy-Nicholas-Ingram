<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {
        if ($category == 'games') {
            $productInfo = \App\Game::all();
        } else if ($category == 'consoles') {
            $productInfo = \App\Console::all();
        } else if ($category == 'accessories') {
            $productInfo = \App\Accessory::all();
        }

        return view('products.index', ['category' => $category, 'productInfo' => $productInfo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category)
    {
        return view('products.create', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category, $id)
    {
        if ($id == "g_me1") {
            $productInfo = [
                'name' => 'Mass Effect',
                'description' => 'The best Mass Effect game out there. If you dissagree your opinion doesn\'t matter because it\'s the wrong one.',
                'price' => 10.99
            ];
        } else if ($id == "c_dreamcast") {
            $productInfo = [
                'name' => 'Sega Dreamcast',
                'description' => 'Big swirly orange circle and plays the big fast blue hog.',
                'price' => 99.99
            ];
        } else if ($id == "a_eyetoy") {
            $productInfo = [
                'name' => 'Playstation Eye Toy',
                'description' => 'Better then the Kinect.',
                'price' => 49.99
            ];
        }

        return view('products.show', ['category' => $category, 'productInfo' => $productInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
