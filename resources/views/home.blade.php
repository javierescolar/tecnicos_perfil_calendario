@extends('layouts.app')

@section('content')

    
        
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>
        </div>
            
                    <div class="col-md-6 panel panel-default">
                        <div class="panel-heading panel-margin">Technicians</div>
                        <div class="panel-body">
                            <img src="https://cdn4.iconfinder.com/data/icons/professions-2-2/151/71-512.png" width="50"/>
                            Configura la lista de técnicos con sus diferentes perfiles de atHome
                            <div>
                                <a href="{{ url('technicians') }}" class="btn btn-primary col-md-offset-10">Go</a> 
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-md-6 panel panel-default">
                        <div class="panel-heading panel-margin">Calendars</div>
                        <div class="panel-body">
                            <img src="http://downloadicons.net/sites/default/files/calendar-icon-65989.png" width="50"/>
                            Configura y crea los calenarios asignados a los técnicos
                            <div>
                                <a href="{{ url('home') }}" class="btn btn-primary col-md-offset-10">Go</a> 
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 panel panel-default">
                        <div class="panel-heading">Profiles</div>
                        <div class="panel-body">
                            <img src="https://cdn1.iconfinder.com/data/icons/education-colored-icons-vol-2/128/077-512.png" width="50"/>
                            Configura la lista perfiles permitidos para los técnicos
                            <div>
                                <a href="{{ url('profiles') }}" class="btn btn-primary col-md-offset-10">Go</a> 
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-md-6 panel panel-default">
                        <div class="panel-heading">Caiders</div>
                        <div class="panel-body">
                            <img src="https://image.flaticon.com/icons/svg/230/230189.svg" width="50"/>
                            Configura la lista de Caiders y asigna los técnicos de los mismos
                            <div>
                                <a href="{{ url('home') }}" class="btn btn-primary col-md-offset-10">Go</a> 
                            </div>
                        </div>
                    </div>
                    
                
            
        
        
   

@endsection
