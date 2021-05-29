@extends('layouts.dashborad.admin')
@section('title','Appointment')

@section('content')
<h1 style="margin-top: 63px;">Appointment</h1>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $appointment->name) }}" id="name" name="name" disabled>
        @error('name')
        <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control @error('age') is-invalid @enderror" value="{{ old('age', $appointment->age) }}" id="age" name="age" disabled>
        @error('age')
        <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="gender">Gender</label>
        <input type="text" class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender', $appointment->gender) }}" id="gender" name="gender" disabled>
        @error('gender')
        <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $appointment->email) }}" id="email" name="email" disabled>
        @error('email')
        <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="Phone">Phone</label>
        <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $appointment->phone) }}" id="phone" name="phone" disabled>
        @error('phone')
        <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="message" >Message</label>
        <textarea class="form-control ckeditor @error('message') is-invalid @enderror" id="message" name="message" disabled>{{ old('message', $appointment->message) }}</textarea>
        @error('message')
        <p class="invalid-feedback">{{ $message }}</p>
        @enderror
    </div>
@endsection