
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
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $appointment->name) }}" id="name" name="name">
    @error('name')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control @error('age') is-invalid @enderror" value="{{ old('age', $appointment->age) }}" id="age" name="age">
    @error('age')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="gender">Gender</label>
    <input type="text" class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender', $appointment->gender) }}" id="gender" name="gender">
    @error('gender')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $appointment->email) }}" id="email" name="email">
    @error('email')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="Phone">Phone</label>
    <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $appointment->phone) }}" id="phone" name="phone">
    @error('phone')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control ckeditor @error('message') is-invalid @enderror" id="message" name="message">{{ old('message', $appointment->message) }}</textarea>
    @error('message')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>



<button type="submit" class="btn btn-primary">Save</button>