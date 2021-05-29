@extends('layouts.dashborad.admin')
@section('title','Create Gallary')

@section('content')
    <h1 style="margin-top: 63px;">Create Gallary</h1>

    <form action="{{route('admin.gallaries.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.gallaries._form')
    </form>

@endsection
