@extends('layouts.dashborad.admin')
@section('title','Doctor Create')

@section('content')

    <h1 style="margin-top: 63px;">Create Doctor</h1>

    <form action="{{route('admin.doctors.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.doctors._form')
    </form>

@endsection