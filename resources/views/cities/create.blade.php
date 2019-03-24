@extends('layouts.base')
@section('content')


<div class="row">
    <div class="col">
        <form action="{{route('cities.store')}}" method="POST">
            @csrf
            <div>
                    <label>Select Country</label>
                <select class="form-control select2" style="width: 100%;" name="country_id" id="country_list" onchange="document.getElementById('country_label').textContent='cities of coutry ' + document.getElementById('country_list').value">
                    @foreach($countries as $country)
                        <option value={{$country->id}}>{{$country->name}} - {{$country->full_name}}</option>
                    @endforeach
                </select>
            </div>
        
            <div>
                <label>City name</label>
                <input type="text" class="form-control" placeholder="enter city name" name="name">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="col">
        
    </div>
</div>

@endsection
@section('scripts')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    
@endsection