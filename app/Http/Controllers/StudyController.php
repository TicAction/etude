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
      //
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function secondgroup()
  {
      //
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      return view('study.index');
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
    // $study->reading = request('reading');
    // $study->vocabulary = request('vocabulary');
    // $study->start_date = request('start_date');
    // $study->end_date = request('end_date');
    // $study->grammary = request('grammary');
    // $study->verbs = request('verbs');
    // $study->math = request('math');
    // $study->english = request('english');
    // $study->oral = request('oral');
    // $study->history = request('history');
    // $study->science = request('science');
    // $study->other = request('other');
    // $study->save();

    return redirect('admin_study_index');
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


          $study->reading = request('reading');
          $study->vocabulary = request('vocabulary');
          $study->start_date = request('start_date');
          $study->end_date = request('end_date');
          $study->grammary = request('grammary');
          $study->verbs = request('verbs');
          $study->math = request('math');
          $study->english = request('english');
          $study->oral = request('oral');
          $study->history = request('history');
          $study->science = request('science');
          $study->other = request('other');
          $study->save();
          return redirect('admin_study_index');
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
