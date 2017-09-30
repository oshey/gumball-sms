<fieldset>
    <legend>Address</legend>

    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label for="street" class="form-control-label">Street</label>
            <p class="form-control-static">{{ empty($address)? '' : strtoupper($address->street) }}</p>
        </div>
    </div>

    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label for="city" class="form-control-label">City</label>
            <p class="form-control-static">{{ empty($address)? '' : strtoupper($address->city) }}</p>
        </div>
    </div>

    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label for="parish" class="form-control-label">Parish</label>
            <p class="form-control-static">{{ empty($address)? '-' : strtoupper($address->parish) }}</p>
        </div>
    </div>

    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label for="country" class="form-control-label">Country</label>
            <p class="form-control-static">{{ empty($address)? '' : strtoupper($address->countries->first()->name) }}</p>
        </div>
    </div>
</fieldset>
