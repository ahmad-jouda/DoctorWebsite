@extends('layouts.dashborad.admin')
@section('title','All Images')

@section('content')
    
    <div class="d-flex justify-content-between">
        <h1 class="mb-5" style="margin-top: 63px;">Sliders</h1>
        <div class="row">
            <x-alerts/>
        </div>
        <div>
            <a href="{{route('admin.sliders.create')}}" class="btn btn-primary" style="position: relative; right: -780px ; top: 34px;"><i class="fa fa-plus-square" style="margin-right:5px;"></i>Create Image</a>
        </div>
    </div>
    <div class="bg-light p-1 mb-3">
        <form action="{{route('admin.sliders.index')}}" method="get" class="form-inline">
            <div class="input-group custom-search-form">
                <input type="date" name="created_at" class="form-control" placeholder="created_at.." value="{{$filters['created_at'] ?? ''}}">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
    </div>
    <form  method="post">
    @csrf
    @method('DELETE')
    <button formaction="/deleteallsliders" type="submit" class="btn  btn-danger glyphicon glyphicon-trash" onclick="return  confirm('do you want to delete Y/N')"  style="margin-top: 10px;"></button>
    
    <table class="table" style="margin-top: 25px;">
        <thead>
            <th><input type="checkbox" class="selectall"></th>
            <th>#</th>
            <th>Image</th>
            <th>Created_At</th>
            <th style="text-align:center;">Action</th>

        </thead>
        <tbody>
        @forelse($sliders as $slider)
        <tr>
            <td><input type="checkbox" name="ids[]" class="selectbox" value="{{$slider->id}}"></td>
            <td>{{ $loop->iteration }}</td>
            <td><img src="{{$slider->image_url}}" height="60" alt="" ></td>
            <td>{{$slider->created_at}}</td>
            <td>
                <div class="row">
                    <div class="col-sm-6" style="text-align:right;">
                        <a href="{{route('admin.sliders.edit',[$slider->id])}}" class="btn btn-primary glyphicon glyphicon-edit" ></a>
                    </div>
                    <div class="col-sm-6">
    
                        <button formaction="{{route('admin.sliders.destroy',$slider->id)}}" type="submit" class="btn  btn-danger glyphicon glyphicon-trash" onclick="return  confirm('do you want to delete Y/N')"></button>
                   
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
    @empty
    <tr>
        <td colspan="9" class="text-center">No Images</td>
    </tr>
@endforelse
    </table>
    </form>

    <script type="text/javascript">
        $('.selectall').click(function(){
            $('.selectbox').prop('checked',$(this).prop('checked'));
        })
        $('selectbox').change(function(){
            var total = $('.selectbox').length;
            var number = $('.selectbox:checked').length;
            if(total == number){
                $('.selectall').prop('checked',true);
            }else{
                $('.selectall').prop('checked',false);
            }
        })
    </script>

@endsection
