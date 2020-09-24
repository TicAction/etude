<?php

namespace App\Http\Controllers;

use App\Study;
use Illuminate\Http\Request;

class StudyController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function firstgroup()
  {
      $study = Study::where('group','=','1')->get();
      return view('341.index',compact('study'));
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function secondgroup()
  {
    $study = Study::where('group','=','2')->get();
    return view('431.index',compact('study'));
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $study = Study::latest()->get();

      return view('study.index',compact('study'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('study.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      $request->validate([
          'reading' => 'nullable',
          'group'  => 'nullable',
          'vocabulary' => 'nullable',
          'start_date' => 'required|date',

          'end_date' => 'required|date',
          'grammary' => 'nullable',
          'verbs' => 'nullable',

          'math' => 'nullable',
          'english' => 'nullable',
          'oral' => 'nullable',

          'history' => 'nullable',
          'science' => 'nullable',
          'other' => 'nullable',
      ]);

      Study::create($request->all());


    return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function show(Study $study)
    {


          return view('study.show',compact('study'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function edit(Study $study)
    {

        return view('study.edit', compact('study'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Study $study)
    {

          $study->update($request->all());
          return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function destroy(Study $study)
    {
        //
    }
}
