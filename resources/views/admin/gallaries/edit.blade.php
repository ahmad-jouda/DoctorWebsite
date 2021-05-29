@extends('layouts.dashborad.admin')
@section('title','Edit Gallary')

@section('content')

    <h1 style="margin-top: 63px;">Update Gallary</h1>
    <form action="{{route('admin.gallaries.update' , [$gallary->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.gallaries._form')
    </form>

@endsection
