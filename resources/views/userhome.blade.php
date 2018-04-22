@extends('index')

@section('content')

         <div class="row margin-left-40px">
            <h2><center>All quiz </center></h2>
                    @foreach($collections as $collection)
                        <div class="col-md-4">
                            <div class="panel panel-info">
                                                             
                                    <div class="panel-heading">
                                        {{$collection->title}}
                                        <small>{{$collection->type }} </small>
                                    </div>
                                        
                                    <div class="panel-body">{{$collection->description}}</div>

                                    <div class="panel-footer panel-primary">
                                            <button class="btn btn-primary" type="submit" value="join now">start now</button>
                                    </div>
                                </div>
                        </div>
                    @endforeach
                
        </div>
@endsection