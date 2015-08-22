@extends('layout')

@section('contain')

        <div class="col-md-4 col-md-offset-4">
            <form class="form-horizontal" method="post">
                @if(Session::get('error')==1)
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>登入失敗</strong>請檢查帳號密碼 或是帳號還未審核
                    </div>
                @endif
                <center><h2 class="form-signin-heading">登入</h2></center>
                <br />
                <div class="form-group">
                    <label for="inputPassword" class="control-label">帳號</label>
                    <input name="account" class="form-control" placeholder="請輸入帳號" required="" type="text" />
                </div>
                <br />
                <div class="form-group">
                    <label for="inputPassword" class="control-label">密碼</label>
                    <input name="password" class="form-control" placeholder="請輸入密碼" required="" type="password" />
                </div>
                <br />
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="btn btn-lg btn-primary btn-block" type="submit">登入</button>
            </form>
            <br />
            <li><a href="./apply">註冊</a></li>
            <br />
            <li><a href="./norem">忘記密碼</a></li>
        </div>

@stop
