@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Maak hier uw rit aan.</div>

                <div class="panel-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="from">Van</label>
                            <input type="text" class="form-control" id="from" placeholder="Van">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="to">Naar</label>
                            <input type="text" class="form-control" id="to" placeholder="Naar">    
                    </div>        
                </div>        
            </div>        
        </div>      
    </div>            
</div>
@endsection







