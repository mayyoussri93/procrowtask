
@extends('layouts.app')
@section('content')




    <div class=" container">
        <br><h3>Accounts</h3><br>
            <div class="col-sm-4">

                <div class="panel panel-default">
                    <div class="panel-heading">{{ $info -> name}}</div>
                    <div class="panel-body">
                        <span class="text-primary"> {{$info -> email}}</span></div>

                    <div  class="btn pull-left"><button type="button" class="btn btn-primary "><a href="/posts"> back</a> </button></div>
                    @if(!auth::guest())
                            {!! Form::open(['action' => ['HomeController@destroy',$info -> id]]) !!}
                            {!! Form::token() ;!!}
                            {!! form::hidden('_method','DELETE') !!}

                    <div  class="btn pull-right">   {!!   Form::submit('Delete',['class' => " btn btn-danger"]); !!}</div>
                            {!! Form::close() !!}
                    <div  class="btn pull-request"><button type="button" class="btn btn-success "><a href="/posts/{{$info -> id}}/edit"> Edit</a> </button></div>

                        @endif
                </div>


            </div>


    </div>


@endsection