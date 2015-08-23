@extends('layout')

@section('contain')

        <div class="container">
            @if(!Session::has('output'))
                <div class="alert alert-warning" role="alert">
                    <strong>藍色標籤為伺服器已存在專案 紅色為gihhub上有伺服器沒有的<br>http://dacsc.club/專案名 為專案位址 laravel框架上傳完請在進伺服器設定</strong>
                </div>
            @else
                <div class="alert alert-warning" role="alert">
                    <strong>指令輸出:</strong><br>
                    {{Session::get('output')}}
                </div>
            @endif

            @foreach($projects as $project)
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$project->name}}</h3>
                    </div>
                    <div class="panel-body">
                        <p>{{$project->commit}}<p class="pull-right">{{$project->{"updated_at"} }}</p></p>
                        專案網頁：<a href="{{$project->site}}">{{$project->site}}</a>
                        <p>專案位址：{{$project->clone}}</p>
                        <div class="pull-right">
                            <a class="btn btn-success" href="https://dacsc.club/com">命令模式</a>
                            <a class="btn btn-success" href="./control.update.{{$project->id}}">更新</a>
                        </div>
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
                        <a class="pull-right btn btn-success" href="./control.add.{{$proremote['name']}}">新增進伺服器</a>
                    </div>
                </div>
            @endforeach
        </div>

@stop
