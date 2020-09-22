@extends('layouts.app')

@section('content')
<h1 class="text-center">Éditer la feuille de devoirs et leçons</h1>
<div class="col-8 offset-2">


<form action="{{ route('admin_study_update',$study->id)}}" method="POST">
@method('PUT')
  @csrf
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label class="label">Date de début</label>
          <div class="form-group">
              <input class="form-control "type="date" name="start_date" value="{{$study->start_date}}">
          </div>
      </div>
    </div>
  <div class="col-6">
    <div class="form-group">
      <label class="label">Date de remise</label>
        <div class="form-group">
            <input class="form-control "type="date" name="end_date" value="{{$study->end_date}}">
        </div>
    </div>
  </div>
  </div>
  <div class="form-group">
    <label class="label">Groupe</label>
      <div class="form-group">
          <select class="form-control "type="text" name="group" >
            @if($study->group = 0)
            <option selected value="0">Faire un choix</option>
          @endif
          @if($study->group = 1)
            <option value="1">341</option>
          @endif
            @if($study->group = 2)
            <option value="2">431</option>
          @endif
          </select>
      </div>
  </div>


  <div class="form-group">
    <label class="label">Lecture</label>
      <div class="form-group">
          <input class="form-control "type="text" name="reading" value="{{$study->reading}}">
      </div>
  </div>

  <div class="form-group">
    <label class="label">Vocabulaire</label>
      <div class="control">
          <input class="form-control" type="text" name="vocabulary" value="{{$study->vocabulary}}" >
      </div>
  </div>

  <div class="form-group">
    <label class="label">Grammaire</label>
      <div class="control">
          <input class="form-control"  type="text" name="grammary" value="{{$study->grammary}}">
      </div>
  </div>

  <div class="form-group">
    <label class="label">Conjugaison</label>
      <div class="control">
          <input class="form-control"  type="text" name="verbs" value="{{$study->verbs}}">
      </div>
  </div>

  <div class="form-group">
    <label class="label">Mathématique</label>
      <div class="control">
          <input class="form-control"  type="text" name="math" value="{{$study->math}}">
      </div>
  </div>

  <div class="form-group">
    <label class="label">Anglais</label>
      <div class="control">
          <input class="form-control"  type="text" name="english" value="{{$study->english}}">
      </div>
  </div>

  <div class="form-group">
    <label class="label">Cummunication orale</label>
      <div class="control">
          <input class="form-control"  type="text" name="oral" value="{{$study->oral}}">
      </div>
  </div>

  <div class="form-group">
    <label class="label">Univers social</label>
      <div class="control">
          <input class="form-control"  type="text" name="history" value="{{$study->history}}">
      </div>
  </div>

  <div class="form-group">
    <label class="label">Science et technologie</label>
      <div class="control">
          <input class="form-control"  type="text" name="science" value="{{$study->science}}">
      </div>
  </div>


    <label class="label">Autres</label>
      <div class="control">
          <textarea class="form-control" type="textarea" name="other">{{$study->other}}></textarea>
      </div>

<br>
<br>
  <div class="form-group">
      <div class="control">
        <button class="btn btn-primary">Modifier</button>
      </div>

</form>
</div>

@endsection
