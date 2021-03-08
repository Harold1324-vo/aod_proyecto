<?php

namespace App\Http\Controllers;

use App\Models\Computers;
use Illuminate\Http\Request;

class ComputersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retornar datos
        $computers = Computers::all();
        return view('computers.index', compact('computers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $computer = request()->except('_token');
        Computers::insert($computer);
        return view('computers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Computers  $computers
     * @return \Illuminate\Http\Response
     */
    public function show(Computers $computer)
    {
        //
        return view('computers.show', compact('computer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Computers  $computers
     * @return \Illuminate\Http\Response
     */
    public function edit(Computers $computers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Computers  $computers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computers $computers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Computers  $computers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computers $computers)
    {
        //
    }
}
