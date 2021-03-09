<?php

namespace App\Http\Controllers;

use App\Models\Processor;
use Illuminate\Http\Request;

class ProcessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retornar datos
        $processors = Processor::all();
        return view('processors.index', compact('processors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('processors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $processor = request()->except('_token');
        Processor::insert($processor);
        return redirect()->to(url('/processors'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Processor  $processor
     * @return \Illuminate\Http\Response
     */
    public function show(Processor $processor)
    {
        //
        return view('processors.show', compact('processor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Processor  $processor
     * @return \Illuminate\Http\Response
     */
    public function edit(Processor $processor)
    {
        //retornar vista
        return view('processors.edit', compact('processor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Processor  $processor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Processor $processor)
    {
        $dataProcessor = request()->except('_token');
        $processor->update($dataProcessor);
        return redirect()->to(url('/processors'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Processor  $processor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Processor $processor)
    {
        //remover el recurso especificado
        $processor->delete();
        return redirect()->to(url('/processors'));
    }
}
