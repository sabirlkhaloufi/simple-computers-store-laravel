<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('computers.index',["computers"=>Computer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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


        $computer = new Computer();
        $request->validate(
            [
                "name" => 'required',
                "proc" => 'required',
                "price" => 'required|integer',
            ]
        );
        $computer->name = $request->input("name");
        $computer->price = $request->input("price");
        $computer->proc = $request->input("proc");
        $computer->save();

        return redirect()->route('computers.index');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $computer = Computer::findOrFail($id);
        return view('computers.show',['computer'=>$computer]);
        //
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
        $computer = Computer::findOrFail($id);
        return view('computers.edit',['computer'=>$computer]);
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
        $request->validate(
            [
                "name" => 'required',
                "proc" => 'required',
                "price" => 'required|integer',
            ]
        );

        $computer = Computer::findOrFail($id);
        $computer->name = $request->input("name");
        $computer->price = $request->input("price");
        $computer->proc = $request->input("proc");
        $computer->save();

        return redirect()->route('computers.index');
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
        $computer = Computer::findOrFail($id);
        $computer->delete();
        return redirect()->route('computers.index');
    }
}
