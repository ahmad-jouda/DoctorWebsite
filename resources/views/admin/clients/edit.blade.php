@extends('layouts.dashborad.admin')
@section('title','Client Update')

@section('content')

    <h1 style="margin-top: 63px;">Update Client</h1>
    <form action="{{route('admin.clients.update' , [$client->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.clients._form')
    </form>

@endsection
