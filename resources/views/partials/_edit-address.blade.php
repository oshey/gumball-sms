<fieldset>
    <legend>Address</legend>

    <div class="col-sm-6 col-md-6">
        <div class="form-group {{ $errors->has('street') ? ' has-error' : '' }}">
            <label for="street" class="form-control-label">Street</label>

            <input type="text" id="street" name="street" class="form-control"
                   placeholder="153 Maroon ave" value="{{ empty($address)? '' : $address->street }}" required>

            @if ($errors->has('street'))
                <span class="help-block">
                <strong>{{ $errors->first('street') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="col-sm-6 col-md-6">
        <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
            <label for="city" class="form-control-label">City</label>

            <input type="text" id="city" name="city" class="form-control"
                   placeholder="Montego Bay" value="{{ empty($address)? '' : $address->city }}" required>

            @if ($errors->has('city'))
                <span class="help-block">
                <strong>{{ $errors->first('city') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="col-sm-6 col-md-6">
        <div class="form-group {{ $errors->has('parish') ? ' has-error' : '' }}">
            <label for="parish" class="form-control-label">Parish</label>

            <input type="text" id="parish" name="parish" class="form-control" placeholder="Saint James"
                   value="{{ empty($address)? '' : $address->parish  }}" required>

            @if ($errors->has('parish'))
                <span class="help-block">
                <strong>{{ $errors->first('parish') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-control-label">Country</label>
            <p class="form-control-static">{{ config('country.name') }}</p>
        </div>
    </div>
</fieldset>