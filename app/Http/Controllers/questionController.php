<?php

namespace App\Http\Controllers;

use App\question;
use Illuminate\Http\Request;
use DB;

class questionController extends Controller
{// {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('show_quest');
        //
    }


    public function i()
    // {
    //     $asd=question::orderBy('id','desc')->take(1)->get();
    {
       $asd=question::all();
         return view('display.q')->with('asda',$asd);
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.add_question');
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

        $stu=new question();
        $stu->q_id=$request->input('q_id');
        $stu->question=$request->input('question'); 
        $stu->ans_id=$request->input('ans_id');
        $stu->save();

        if($stu->save()){
            echo "question saved";
     }}
    
    /**
     * Display the specified resource.
     *
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */ 
    public function show( $question)
    { $quest = question::find($question);
                return view('show_quest')->with('question',$quest);



        // $question= question::find($question);
        // return view('show_quest')->with('question',$question);
    //     //

        // { 
        //     // return 123;
        //     return question::find($question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(question $question)
    {
        //
    }
}
