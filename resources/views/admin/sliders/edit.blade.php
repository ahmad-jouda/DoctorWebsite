@extends('layouts.dashborad.admin')
@section('title','Edit slider')

@section('content')

    <h1 style="margin-top: 63px;">Update slider</h1>
    <form action="{{route('admin.sliders.update' , [$slider->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.sliders._form')
    </form>

@endsection
