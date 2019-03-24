@extends('layouts.base')
@section('content')


    <form action="{{route('citymanagers.update',$citymanager->id)}}" method="POST">
        @csrf
        {{method_field('PUT')}}

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input name="name" type="text" value="{{$citymanager->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input name="email" type="email" value="{{$citymanager->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">National ID</label>
            <input name="national_id" type="text" value="{{$citymanager->national_id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>



        <div class="form-group">
            <label for="exampleInputPassword1"></label>
            <select class="form-control" name="city_id">
                @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
            </select>
        </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection