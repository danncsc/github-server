@extends('layout')

@section('contain')

        <div class="container">
            @foreach($projects as $project)
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$project['name']}}</h3>
                    </div>
                    <div class="panel-body">
                        <a href="{{$project['html_url']}}">{{$project['html_url']}}</a>
                        <p>{{$project['clone_url']}}</p>
                        <button class="pull-right btn btn-success">新增進伺服器</button>
                        <button class="pull-right btn btn-success">更新</button>
                    </div>
                </div>
            @endforeach
        </div>

@stop
