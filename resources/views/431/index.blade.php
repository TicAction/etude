@extends('layouts.main')

@section('content')

@foreach($study as $stu)
<h2 class="text-center">Leçons et devoirs du {{\Carbon\Carbon::parse($stu->start_date)->format('d M')}} au {{\Carbon\Carbon::parse($stu->end_date)->format('d M')}}</h2>
@endforeach
<br>
<hr>
  <table class="table table-striped col-8 offset-2">
    @foreach ($study as $stu)

  @if($stu->reading)
      <tr>
        <th>  Lecture :</th>
          <td>  {{$stu->reading}} </td>
      </tr>
  @endif

  @if($stu->vocabulary)
      <tr>
        <th>  Vocabulaire :</th>
          <td>  {{$stu->vocabulary}} </td>
      </tr>
  @endif

  @if($stu->grammary)
      <tr>
        <th>  Grammaire :</th>
          <td>  {{$stu->grammary}} </td>
      </tr>
  @endif

  @if($stu->verbs)
      <tr>
        <th>  Conjugaison :</th>
          <td>  {{$stu->verbs}} </td>
      </tr>
  @endif

  @if($stu->math)
      <tr>
        <th>  Mathématique :</th>
          <td>  {{$stu->math}} </td>
      </tr>
  @endif

  @if($stu->english)
      <tr>
        <th>  Anglais :</th>
          <td>  {{$stu->english}} </td>
      </tr>
  @endif

  @if($stu->oral)
      <tr>
        <th>  Communication orale :</th>
          <td>  {{$stu->oral}} </td>
      </tr>
  @endif

  @if($stu->history)
      <tr>
        <th>  Univers social :</th>
          <td>  {{$stu->history}} </td>
      </tr>
  @endif

  @if($stu->science)
      <tr>
        <th>  Science et technologie :</th>
          <td>  {{$stu->science}} </td>
      </tr>
  @endif

  @if($stu->other)
      <tr>
        <th>  Autres :</th>
          <td>  {{$stu->other}} </td>
      </tr>
  @endif

  @endforeach

  </table>





@endsection
