<?php

namespace App\Http\Controllers;

use App\Console;
use Illuminate\Http\Request;

class ConsolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consoles = Console::all();

        return view('products.index', ['category' => 'consoles', 'products' => $consoles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create', ['category' => 'consoles']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $console = Console::create($request->all());

        return redirect('/consoles/'.$console->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Console $console)
    {
        return view('products.show', ['category' => 'consoles', 'product' => $console]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Console $console)
    {
        return view('products.edit', ['category' => 'consoles', 'product' => $console]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Console $console)
    {
        $console->update($request->all());

        return redirect('/consoles/'.$console->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Console $console)
    {
        $console->delete();

        return redirect('/consoles');
    }
}
