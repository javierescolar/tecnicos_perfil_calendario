
@extends('layouts.app')

@section('content')

   <h1>
    CaiderController#index
    </h1>
    
     
     <a href="{{ url('home') }}" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-chevron-left"></span></a>  
     <a href="{{ url('caiders/create') }}" class="btn btn-success btn-sm">New</a> 
     
    <div class="panel panel-default">
        <div class="panel-heading">Caiders</div>
        <div class="panel-body">
        @foreach ($caiders as $caider)
           <diV class="row">
                <div class="col-md-3">{{$caider->name}}</div>
                <div class="col-md-1">{{$caider->phone}}</div>
                <div class="col-md-4">{{$caider->address}}</div>
                <div class="col-md-1"><a href="{{ url('caiders/'.$caider->id) }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="col-md-1"><a href="{{ url('caiders/'.$caider->id.'/edit') }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit"></span></a></div>
                <div class="col-md-1">
                    <form action="/caiders/{{$caider->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
                    </form>
                </div>
            </diV>
            <br>
        @endforeach
        </div>
    </div>
        
   
    
@endsection
