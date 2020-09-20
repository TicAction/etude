@extends('layouts.app')

@section('content')
<h1 class="text-center">Nouvelle feuille de devoirs et leçons</h1>
<div class="col-8 offset-2">


<form class="" action="admin_study_store" method="post">
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label class="label">Date de début</label>
          <div class="form-group">
              <input class="form-control "type="date" name="start_date" value="">
          </div>
      </div>
    </div>
  <div class="col-6">
    <div class="form-group">
      <label class="label">Date de remise</label>
        <div class="form-group">
            <input class="form-control "type="date" name="end_date" value="">
        </div>
    </div>
  </div>
  </div>
  <div class="form-group">
    <label class="label">Groupe</label>
      <div class="form-group">
          <select class="form-control "type="text" name="group" value="">
            <option selected>Faire un choix</option>
            <option value="341">341</option>
            <option value="431">431</option>
          </select>
      </div>
  </div>


  <div class="form-group">
    <label class="label">Lecture</label>
      <div class="form-group">
          <input class="form-control "type="text" name="reading" value="">
      </div>
  </div>

  <div class="form-group">
    <label class="label">Vocabulaire</label>
      <div class="control">
          <input class="form-control" type="text" name="vocabulary" value="" >
      </div>
  </div>

  <div class="form-group">
    <label class="label">Grammaire</label>
      <div class="control">
          <input class="form-control"  type="text" name="grammary" value="">
      </div>
  </div>

  <div class="form-group">
    <label class="label">Conjugaison</label>
      <div class="control">
          <input class="form-control"  type="text" name="verbs" value="">
      </div>
  </div>

  <div class="form-group">
    <label class="label">Mathématique</label>
      <div class="control">
          <input class="form-control"  type="text" name="math" value="">
      </div>
  </div>

  <div class="form-group">
    <label class="label">Anglais</label>
      <div class="control">
          <input class="form-control"  type="text" name="english" value="">
      </div>
  </div>

  <div class="form-group">
    <label class="label">Cummunication orale</label>
      <div class="control">
          <input class="form-control"  type="text" name="oral" value="">
      </div>
  </div>

  <div class="form-group">
    <label class="label">Univers social</label>
      <div class="control">
          <input class="form-control"  type="text" name="history" value="">
      </div>
  </div>

  <div class="form-group">
    <label class="label">Science et technologie</label>
      <div class="control">
          <input class="form-control"  type="text" name="science" value="">
      </div>
  </div>


    <label class="label">Autres</label>
      <div class="control">
          <textarea class="form-control" type="textarea" name="other" value=""></textarea>
      </div>

<br>
<br>
  <div class="form-group">
      <div class="control">
        <button class="btn btn-primary">Soumettre</button>
      </div>

</form>
</div>

@endsection
