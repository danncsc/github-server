@extends('layout')

@section('contain')

        <div class="col-md-4 col-md-offset-4">
            <form class="form-horizontal" method="post" action="./control.add">
                <center><h2 class="form-signin-heading">註冊</h2></center>
                <br />
                <div class="form-group">
                    <label for="inputPassword" class="control-label">名稱</label>
                    <input name="name" class="form-control disabled" required="" type="text" value="{{$project['name']}}" disabled />
                    <input name="name" type="hidden" value="{{$project['name']}}" />
                </div>
                <br />
                <div class="form-group">
                    <label for="inputPassword" class="control-label">clone</label>
                    <input name="clone" class="form-control disabled" required="" type="text" value="{{$project['clone_url']}}" disabled />
                    <input name="clone" type="hidden" value="{{$project['clone_url']}}" />
                </div>
                <br />
                <div class="form-group">
                    <label for="inputPassword" class="control-label">介紹</label>
                    <input name="commit" class="form-control" required="" type="text" value="{{$project['description']}}" />
                </div>
                <input type="hidden" name="site" value="{{$project['html_url']}}">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="laravel" value="laravel"> 是laravel框架嘛？
                    </label>
                </div>
                <br />
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="btn btn-lg btn-primary btn-block" type="submit">新增</button>
            </form>
        </div>

@stop
