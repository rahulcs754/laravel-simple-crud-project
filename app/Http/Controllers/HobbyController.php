<?php

namespace App\Http\Controllers;

use App\hobby;

use Illuminate\Http\Request;

class HobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hobbies = Hobby::all();
        return view('hobby.index')->with([
            'hobbies' => $hobbies
            ]);          

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hobby.create');
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
        $hobby = new Hobby([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        $hobby->save();
        return ($this->index());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function show(hobby $hobby)
    {
        //
        return view('hobby.show', [
            'hobby' => $hobby
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function edit(hobby $hobby)
    {
        //
        return view('hobby.edit', [
            'hobby' => $hobby
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hobby $hobby)
    {
        //
        $hobby->update([
            'title' => $request->title,
            'description' => $request->description
            ]);
        return ($this->index()); // return to index page
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function destroy(hobby $hobby)
    {
        //
        $hobby-> delete() ;
        return ($this->index()); // Back to index page
    }
}
