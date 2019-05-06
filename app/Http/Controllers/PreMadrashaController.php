<?php

namespace App\Http\Controllers;

use App\preMadrasha;
use Illuminate\Http\Request;

class PreMadrashaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\preMadrasha  $preMadrasha
     * @return \Illuminate\Http\Response
     */
    public function show(preMadrasha $preMadrasha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\preMadrasha  $preMadrasha
     * @return \Illuminate\Http\Response
     */
    public function edit(preMadrasha $preMadrasha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\preMadrasha  $preMadrasha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, preMadrasha $preMadrasha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\preMadrasha  $preMadrasha
     * @return \Illuminate\Http\Response
     */
    public function destroy(preMadrasha $preMadrasha)
    {
        //
    }
}
