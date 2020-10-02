@extends('layouts.app')

@section('content')

<h3>Groupe 341</h3>
    <table class="table table-striped">
        <tr>

            <th>Date du début</th>
            <th>Lecture</th>
            <th>Actions</th>
            <th></th>
        </tr>
        @foreach($thirds as $third)
            @if($third->group == '1')
            <tr>

                <td>
                    <div>Leçons et devoirs du {{\Carbon\Carbon::parse($third->start_date)->locale('fr_FR')->format('d M')}} au {{\Carbon\Carbon::parse($third->end_date)->format('d M')}}</div>
                </td>
                <td>
                    {{$third->reading}}
                </td>
                <td>
                    <a href="{{route('admin_study_show',$third->id)}}"><button class="btn btn-primary btn-sm">Voir</button> </a>
                    <a href="{{route('admin_study_edit',$third->id)}}"><button class="btn btn-success btn-sm">Modifier</button> </a>
                </td>
                <td>
                    <form action="{{route('admin_study_delete',$third->id)}}" method="POST">
                        @method('DELETE') @csrf
                        <button class="btn btn-danger btn-sm" type="submit">Effacer</button>
                    </form>
                </td>
            </tr>
        @endif
        @endforeach
    </table>
<hr>

    <h3>Groupe 431</h3>
    <table class="table table-striped">
        <tr>

            <th>Date du début</th>
            <th>Lecture</th>
            <th>Actions</th>
            <th></th>
        </tr>
        @foreach($fourths as $fourth)
            @if($fourth->group == '2')
                <tr>
            <td>

                    <div>Leçons et devoirs du {{\Carbon\Carbon::parse($fourth->start_date)->format('d M')}} au {{\Carbon\Carbon::parse($fourth->end_date)->format('d M')}}</div>
                </td>
                <td>
                    {{$fourth->reading}}
                </td>
                <td>
                    <a href="{{route('admin_study_show',$fourth->id)}}"><button class="btn btn-primary btn-sm">Voir</button> </a>
                    <a href="{{route('admin_study_edit',$fourth->id)}}"><button class="btn btn-success btn-sm">Modifier</button> </a>                </td>
            </td>

                <td>
                    <form action="{{route('admin_study_delete',$fourth->id)}}" method="POST">
                        @method('DELETE') @csrf
                        <button class="btn btn-danger btn-sm" type="submit">Effacer</button>
                    </form>
                </td>
            </tr>


            @endif
        @endforeach
    </table>

@endsection
