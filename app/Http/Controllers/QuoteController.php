<?php

namespace App\Http\Controllers;

use App\Quotes;
use Illuminate\Http\Request;

class QuoteController extends Controller
{

    public function __construct()
    {
        $this->middleware('qote',['except' =>'index','show','test']);
    }

    public function index()
    {

        $quotes=Quotes::all();

        return view('quotes.index', compact('quotes'));

    }


    public function create()
    {
        return view('quotes.create');
    }


    public function store(Request $request)
    {
        Quotes::create($request->all());
        return redirect('/quotes');
    }
    public function handle()
    {
        $name = $this->ask('What is your name?');

        return $name;
    }

    public function show($id)
    {

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


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

}
