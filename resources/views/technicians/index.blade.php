
@extends('layouts.app')

@section('content')

   <h1>
    TechnicianController#index
    </h1>

     
     <a href="{{ url('home') }}" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-chevron-left"></span></a>  
     <a href="{{ url('technicians/create') }}" class="btn btn-success btn-sm">New</a> 
     
    <div class="panel panel-default">
        <div class="panel-heading">Technicians</div>
        <div class="panel-body">
        @foreach ($technicians as $technician)
            <diV class="row">
                <div class="col-md-3">{{$technician->name}}</div>
                <div class="col-md-3">{{$technician->last_name}}</div>
                <div class="col-md-3">{{$technician->email}}</div>
                <div class="col-md-1"><a href="{{ url('technicians/'.$technician->id) }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="col-md-1"><a href="{{ url('technicians/'.$technician->id.'/edit') }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit"></span></a></div>
                <div class="col-md-1">
                    <form action="/technicians/{{$technician->id}}" method="POST">
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
