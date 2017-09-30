@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default col-sm-12 col-md-8">

            <div class="panel-heading">
                <h3>Profile</h3>
            </div>

            <div class="panel-body">
                <form>
                    @include('partials._show-profile-details', array('profile' => $teacher->profile, 'birthday' => $teacher->birthday))

                    <fieldset>
                        <legend>Contact(s)</legend>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="phone" class="form-control-label">Phone</label>
                                <p class="form-control-static">
                                    {{ empty($teacher->phone)? '' : strtoupper($teacher->phone->number) }}
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-control-label">Email</label>
                                <p class="form-control-static">{{ strtoupper($teacher->email) }}</p>
                            </div>
                        </div>
                    </fieldset>

                    @include('partials._show-address', array('address' => $teacher->address))

                </form>
            </div>
        </div>

        <div class="panel panel-default col-sm-12 col-md-3 col-md-offset-1">

            <div class="panel-heading">
                <h3>Subject(s)</h3>
            </div>

            <div class="panel-body">
                <table class="table">
                    <ul class="">
                        <li><p>Maths</p></li>
                        <li><p>English Language</p></li>
                        <li><p>Information Technology</p></li>
                        <li><p>Human and Social Biology</p></li>
                        <li><p>Physics</p></li>
                        <li><p>Chemistry</p></li>
                        <li><p>Spanish</p></li>
                        <li><p>Principle Of Business</p></li>
                        <li><p>Food and Nutrition Economics</p></li>
                    </ul>
                </table>
            </div>
        </div>
    </div>
@endsection