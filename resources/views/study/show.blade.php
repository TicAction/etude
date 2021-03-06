@extends('layouts.app')

@section('content')


        <h2 class="text-center">Leçons et devoirs du {{\Carbon\Carbon::parse($study->start_date)->format('d M')}} au {{\Carbon\Carbon::parse($study->end_date)->format('d M')}}</h2>

    <br>
    <hr>
    <table class="table table-striped col-8 offset-2">


            @if($study->reading)
                <tr>
                    <th>  Lecture :</th>
                    <td>  {{$study->reading}} </td>
                </tr>
            @endif

            @if($study->vocabulary)
                <tr>
                    <th>  Vocabulaire :</th>
                    <td>  {{$study->vocabulary}} </td>
                </tr>
            @endif

            @if($study->grammary)
                <tr>
                    <th>  Grammaire :</th>
                    <td>  {{$study->grammary}} </td>
                </tr>
            @endif

            @if($study->verbs)
                <tr>
                    <th>  Conjugaison :</th>
                    <td>  {{$study->verbs}} </td>
                </tr>
            @endif

            @if($study->math)
                <tr>
                    <th>  Mathématique :</th>
                    <td>  {{$study->math}} </td>
                </tr>
            @endif

            @if($study->english)
                <tr>
                    <th>  Anglais :</th>
                    <td>  {{$study->english}} </td>
                </tr>
            @endif

            @if($study->oral)
                <tr>
                    <th>  Communication orale :</th>
                    <td>  {{$study->oral}} </td>
                </tr>
            @endif

            @if($study->history)
                <tr>
                    <th>  Univers social :</th>
                    <td>  {{$study->history}} </td>
                </tr>
            @endif

            @if($study->science)
                <tr>
                    <th>  Science et technologie :</th>
                    <td>  {{$study->science}} </td>
                </tr>
            @endif

            @if($study->other)
                <tr>
                    <th>  Autres :</th>
                    <td>  {{$study->other}} </td>
                </tr>
            @endif



    </table>





@endsection

