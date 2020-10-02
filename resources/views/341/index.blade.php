@extends('layouts.main')

@section('content')
    <table class="table table-striped col-10 offset-1">
        @foreach ($study as $stu)
            <tr>
                <td colspan="2">
                    <h2 class="text-center">Leçons et devoirs du {{Jenssegers\Date\Date::parse($stu->start_date)->format('d F')}} au {{Jenssegers\Date\Date::parse($stu->end_date)->format('d F Y')}}</h2>

                </td>
            </tr>
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
            <tr>
                0                <td colspan="2">  <br>
                    <br>
                    <br>
                </td>
            </tr>
        @endforeach

    </table>





@endsection
