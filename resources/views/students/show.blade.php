@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white">

        <div class="page-header">
            <h2>Profile</h2>
        </div>

        <ul class="list-unstyled">
            <li><h3>{{ $student->full_name }}</h3></li>
            <li><small class="text-muted"><strong>Birthday:</strong> {{ $student->birthday->when }}</small></li>
            <li><small class="text-muted"><strong>Gender:</strong> {{ strtoupper($student->profile->gender) }}</small></li>
        </ul>

        <a href="{{ route('students.edit', $student->id) }}" class="pull-left" >Edit</a>

        <form method="post" action="{{ route('students.destroy', $student->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger pull-right" type="submit">Delete</button>
        </form>
    </div>
@endsection
