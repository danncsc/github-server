@extends('layout')

@section('contain')

        <div class="container">
            <h6>藍色標籤為伺服器已存在專案<br>紅色為gihhub上有伺服器沒有的</h6>
            <form method="post">
                @foreach($projects as $project)
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{$project->name}}</h3>
                        </div>
                        <div class="panel-body">
                            <p>{{$project->commit}}</p>
                            專案網頁：<a href="{{$project->site}}">{{$project->site}}</a>
                            <p>專案位址：{{$project->clone}}</p>
                            <input type="submit" class="pull-right btn btn-success" name="update" value="更新" />
                        </div>
                    </div>
                @endforeach
                @foreach($proremotes as $proremote)
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{$proremote['name']}}</h3>
                        </div>
                        <div class="panel-body">
                            <p>{{$proremote['description']}}</p>
                            專案網頁：<a href="{{$proremote['html_url']}}">{{$proremote['html_url']}}</a>
                            <p>專案位址：{{$proremote['clone_url']}}</p>
                            <input type="submit" class="pull-right btn btn-success" name="update" value="新增進伺服器" />
                        </div>
                    </div>
                @endforeach
            </form>
        </div>

@stop
