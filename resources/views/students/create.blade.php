@extends('layouts.app')

@section('content')
        <div class="panel panel-default col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

            <div class="panel-heading">
                <h2>Create Student</h2>
            </div>

            <div class="panel-body">

                <form method="post" action="{{ route('students.store') }}">


                    {{ csrf_field() }}

                    <fieldset>
                        <legend>Personal Details</legend>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="form-control-label">Title</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Dr. (optional)" autofocus>
                            </div>
                            @if ($errors->has('title'))
                                <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name" class="form-control-label">First Name</label>
                                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="John" required>
                            </div>
                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                             </span>
                            @endif
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('middle_name') ? ' has-error' : '' }}">
                                <label for="middle_name" class="form-control-label">Middle Name</label>
                                <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="West (optional)">
                            </div>
                            @if ($errors->has('middle_name'))
                                <span class="help-block">
                                <strong>{{ $errors->first('middle_name') }}</strong>
                             </span>
                            @endif
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="last_name" class="form-control-label">Last Name</label>
                                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Brown" required>
                            </div>
                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('birthday') ? ' has-error' : '' }}">
                                <label for="birthday" class="form-control-label">Birthday</label>
                                <input type="date" id="birthday" name="birthday" class="form-control" required>
                            </div>
                            @if ($errors->has('birthday'))
                                <span class="help-block">
                                <strong>{{ $errors->first('birthday') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="gender" class="form-control-label">Gender</label>
                                <select id="gender" name="gender" class="form-control">
                                    <option value="n">Unspecified</option>
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                </select>
                            </div>
                        </div>

                    </fieldset>

                    <div class="col-xs-offset-10 col-sm-offset-10 col-md-offset-10">
                        <button class="btn btn-primary" type="submit" role="button">Submit</button>
                    </div>

                </form>
            </div>
        </div>
@endsection
