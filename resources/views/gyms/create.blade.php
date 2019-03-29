@extends('layouts.base')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href="{{route('gyms.index')}}">
        <button class="btn btn-primary">View All Gyms</button>
    </a>
    <form action="{{route('gyms.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">City</label>
            <select class="form-control" name="city_id">
                @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}} - {{$city->country->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            
        </div>
        <div class="form-group">
        <label for="exampleInputImage1">Cover Photo</label>
           <?php
 echo Form::file('public/img');?>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
