@extends('layouts.dashborad.admin')
@section('title','Appointment Update')

@section('content')

    <h1 style="margin-top: 63px;">Update Contact</h1>
    <form action="{{route('admin.appointments.update' , [$appointment->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.appointments._form')
    </form>

@endsection
