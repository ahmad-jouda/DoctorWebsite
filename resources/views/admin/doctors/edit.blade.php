@extends('layouts.dashborad.admin')
@section('title','Doctor Update')

@section('content')

    <h1 style="margin-top: 63px;">Update Doctor</h1>
    <form action="{{route('admin.doctors.update' , [$doctor->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.doctors._form')
    </form>

@endsection
