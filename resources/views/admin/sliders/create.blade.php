@extends('layouts.dashborad.admin')
@section('title','Create slider')

@section('content')
    <h1 style="margin-top: 63px;">Create Image</h1>

    <form action="{{route('admin.sliders.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.sliders._form')
    </form>

@endsection
