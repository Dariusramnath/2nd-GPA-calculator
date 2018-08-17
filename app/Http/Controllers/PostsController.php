<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Another one";
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

    public function gpaform(){
        return view('gpaform');
    }

    public function calgpa(Request $req){
        $Grade_Lookup = ['A+' => 4.3,
                        'A' => 4.0,
                        'A-' => 3.7,
                        'B+' => 3.3,
                        'B' => 3.0,
                        'B-' => 2.7,
                        'C+' => 2.3,
                        'C' => 2.0,
                        'C-' => 1.7,];

        $Grade = strtoupper($req['Grade']);

        if(!array_key_exists($Grade, $Grade_Lookup)){
            return view('errorentry');
        }                

       
        $Credits = $req['Credits'];

        $GPA = $Grade_Lookup[$Grade];

        $Result = ($GPA*$Credits)/$Credits;
    
        return view('gparesult', ['Result' => $Result]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
