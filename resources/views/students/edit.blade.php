@extends('layouts.app')

@section('content')
    <div class="panel panel-default col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

        <div class="panel-heading">
            <h2>Update Student</h2>
        </div>

        <div class="panel-body">

            <form method="post" action="{{ route('students.update', $student->id) }}">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                @include('partials._edit-profile-details', array('profile' => $student->profile, 'birthday' => $student->birthday))

                <div class="col-xs-offset-10 col-sm-offset-10 col-md-offset-10">
                    <button class="btn btn-primary" type="submit" role="button">Submit</button>
                </div>

            </form>
        </div>
    </div>
@endsection
