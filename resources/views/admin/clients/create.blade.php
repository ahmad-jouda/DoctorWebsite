@extends('layouts.dashborad.admin')
@section('title','Client Create')

@section('content')

    <h1 style="margin-top: 63px;">Create Client</h1>

    <form action="{{route('admin.clients.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.clients._form')
    </form>

@endsection