@extends('layouts.dashborad.admin')
@section('title','Service Create')

@section('content')

    <h1 style="margin-top: 63px;">Create Service</h1>

    <form action="{{route('admin.services.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.services._form')
    </form>

@endsection