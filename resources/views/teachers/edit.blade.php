@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel panel-default col-sm-12 col-md-8">

            <div class="panel-heading">
                <h3>Edit My Profile</h3>
            </div>

            <div class="panel-body">
                <form method="post" action="{{ route('teachers.update') }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    @include('partials._edit-profile-details', array('profile' => $teacher->profile, 'birthday' => $teacher->birthday))

                    <fieldset>
                        <legend>Contact(s)</legend>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="form-control-label">Phone</label>

                                <input type="text" id="phone" name="phone" class="form-control" placeholder="555-555-5555"
                                       value="{{ empty($teacher->phone)? '' : $teacher->phone->number }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </fieldset>

                    @include('partials._edit-address', array('address' => $teacher->address))

                    <div class="col-sm-offset-8 col-md-offset-8">
                        <button role="button" type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="panel panel-default col-sm-12 col-md-3 col-md-offset-1">

            <div class="panel-heading">
                <h3>Subject(s)</h3>
            </div>

            <div class="panel-body">
                <table class="table">
                    <tbody>
                    <tr><td>Maths</td><td><input type="checkbox"></td></tr>
                    <tr><td>English Language</td><td><input type="checkbox"></td></tr>
                    <tr><td>Information Technology</td><td><input type="checkbox"></td></tr>
                    <tr><td>Human and Social Biology</td><td><input type="checkbox"></td></tr>
                    <tr><td>Physics</td><td><input type="checkbox"></td></tr>
                    <tr><td>Chemistry</td><td><input type="checkbox"></td></tr>
                    <tr><td>Spanish</td><td><input type="checkbox"></td></tr>
                    <tr><td>Principle Of Business</td><td><input type="checkbox"></td></tr>
                    <tr><td>Food and Nutrition Economics</td><td><input type="checkbox"></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection