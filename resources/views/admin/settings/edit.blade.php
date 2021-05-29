@extends('layouts.dashborad.admin')
@section('title','Contact Update')

@section('content')

    <h1 style="margin-top: 63px;">Update Contact</h1>
    <form action="{{route('admin.settings.update' , [$setting->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.settings._form')
    </form>

@endsection
