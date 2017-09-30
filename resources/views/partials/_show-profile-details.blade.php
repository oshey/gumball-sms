<fieldset>
    <legend>Personal Details</legend>

    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-control-label">Title</label>
            <p class="form-control-static">{{ empty($profile)? '-': $profile->title }}</p>
        </div>
    </div>

    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-control-label">First Name</label>
            <p class="form-control-static">{{ empty($profile)? '-': strtoupper($profile->first_name) }}</p>
        </div>
    </div>

    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-control-label">Middle Name</label>
            <p class="form-control-static">{{ empty($profile)? '-': strtoupper($profile->middle_name) }}</p>
        </div>
    </div>

    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-control-label">Last Name</label>
            <p class="form-control-static">{{ empty($profile)? '-': strtoupper($profile->last_name) }}</p>
        </div>
    </div>

    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-control-label">Birthday</label>
            <p class="form-control-static">{{ empty($birthday)? '-': strtoupper($birthday->when) }}</p>
        </div>
    </div>

    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-control-label">Gender</label>
            <p class="form-control-static">{{ empty($profile)? '-': strtoupper($profile->gender) }}</p>
        </div>
    </div>
</fieldset>