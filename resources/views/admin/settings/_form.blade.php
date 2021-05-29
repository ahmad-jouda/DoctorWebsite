
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif



<div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $setting->address) }}" id="address" name="address">
    @error('address')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $setting->email) }}" id="email" name="email">
    @error('email')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="Phone">Phone</label>
    <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $setting->phone) }}" id="phone" name="phone">
    @error('phone')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="postal_code">Postal Code</label>
    <input type="text" class="form-control @error('postal_code') is-invalid @enderror" value="{{ old('postal_code', $setting->postal_code) }}" id="postal_code" name="postal_code">
    @error('postal_code')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="first_time">First Time</label>
    <input type="time" class="form-control @error('first_time') is-invalid @enderror" value="{{ old('first_time', $setting->first_time) }}" id="first_time" name="first_time">
    @error('first_time')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="last_time">Last Time</label>
    <input type="time" class="form-control @error('last_time') is-invalid @enderror" value="{{ old('last_time', $setting->last_time) }}" id="last_time" name="last_time">
    @error('last_time')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="logo">Logo</label>
    <img src="{{ $setting->logo_url }}" id="output" height="60" alt="" class="d-block">
    <input type="file" accept="image/*" onchange="loadFile(event)" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo" style="margin-top: 13px;">
    @error('logo')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="background">Background</label>
    <img src="{{ $setting->background_url }}" id="background" height="60" alt="" class="d-block">
    <input type="file" accept="image/*" onchange="loadImage(event)" class="form-control @error('background') is-invalid @enderror" id="background" name="background" style="margin-top: 13px;">
    @error('background')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>


<button type="submit" class="btn btn-primary">Save</button>

<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<script>
var loadImage = function(event) {
	var image = document.getElementById('background');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>