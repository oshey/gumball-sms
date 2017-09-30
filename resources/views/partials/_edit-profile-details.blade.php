<fieldset>
    <legend>Personal Details</legend>
    <div class="col-sm-6 col-md-6">
        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="title" class="form-control-label">Title</label>

            <input type="text" id="title" name="title" class="form-control"
                   placeholder="Dr. (optional)" value="{{ empty($profile)? '' : $profile->title }}" autofocus>
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

            <input type="text" id="first_name" name="first_name" class="form-control"
                   placeholder="John" value="{{ empty($profile)? '' : $profile->first_name }}" required>
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

            <input type="text" id="middle_name" name="middle_name" class="form-control"
                   placeholder="West (optional)" value="{{ empty($profile)? '' : $profile->middle_name }}">
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

            <input type="text" id="last_name" name="last_name" class="form-control"
                   placeholder="Brown" value="{{ empty($profile)? '' : $profile->last_name }}" required>
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

            <input type="date" id="birthday" name="birthday" class="form-control"
                   value="{{ empty($birthday)? '' : $birthday->when  }}" required>
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
                <option {{ (!empty($profile) && $profile->gender ==  "m") ? 'selected' : '' }} value="m">Male</option>
                <option {{ (!empty($profile) && $profile->gender ==  "f") ? 'selected' : '' }} value="f">Female</option>
            </select>

        </div>
    </div>
</fieldset>