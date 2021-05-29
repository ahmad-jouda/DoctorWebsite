@extends('layouts.dashborad.admin')
@section('title','Service Update')

@section('content')

    <h1 style="margin-top: 63px;">Update Service</h1>
    <form action="{{route('admin.services.update' , [$service->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.services._form')
    </form>

@endsection
