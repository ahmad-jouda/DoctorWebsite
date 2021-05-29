@extends('layouts.dashborad.admin')
@section('title','All Doctors')

@section('content')

    <div class="d-flex justify-content-between">
        <h1 class="mb-5" style="margin-top: 63px;">Contacts</h1>
        <div class="row">
            <x-alerts/>
        </div>
        
    </div>
    <div class="bg-light p-1 mb-3" style="position: relative;top: 30px;margin-bottom: 40px;">
        <form action="{{route('admin.contacts.index')}}" method="get" class="form-inline">
            <div class="input-group custom-search-form">
                <input type="text" name="name" class="form-control" placeholder="name.." value="{{$filters['name'] ?? ''}}">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            <div class="input-group custom-search-form">
                <input type="email" name="email" class="form-control" placeholder="email.." value="{{$filters['email'] ?? ''}}">
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
    <button formaction="/deleteallcontacts" type="submit" class="btn  btn-danger glyphicon glyphicon-trash" onclick="return  confirm('do you want to delete Y/N')"></button>

    <table class="table" style="margin-top: 25px;">
        <thead>
            <th><input type="checkbox" class="selectall"></th>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Created_At</th>
            <th>Updated_At</th>
            <th style="text-align:center;">Action</th>
        </thead>
        <tbody>
        @forelse($contacts as $contact)
        <tr>
            <td><input type="checkbox" name="ids[]" class="selectbox" value="{{$contact->id}}"></td>
            <td>{{ $loop->iteration }}</td>
            <td class="text-success"><a href="{{route('admin.contacts.show', $contact->id)}}">{{$contact->name}}</td>
            <td >{{$contact->phone}}</td>
            <td >{{$contact->email}}</td>
            <td>{{$contact->created_at}}</td>
            <td>{{$contact->updated_at}}</td>
            <td>
                <div class="row">
                    <div class="col-sm-6" style="text-align:right;">
                        <a href="{{route('admin.contacts.edit',[$contact->id])}}" class="btn btn-primary glyphicon glyphicon-edit" ></a>
                    </div>
                    <div class="col-sm-6">
                    <button formaction="{{route('admin.contacts.destroy',$contact->id)}}" type="submit" class="btn  btn-danger glyphicon glyphicon-trash" onclick="return  confirm('do you want to delete Y/N')"></button>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
    @empty
    <tr>
        <td colspan="9" class="text-center">No Doctors</td>
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
