@extends('layout')

@section('contain')

        <div class="col-md-4 col-md-offset-4">
            <form class="form-horizontal" method="post">
                <center><h2 class="form-signin-heading">註冊</h2></center>
                <br />
                <div class="form-group">
                    <label for="inputPassword" class="control-label">帳號</label>
                    <input name="account" class="form-control" placeholder="請輸入帳號" required="" type="text"></input>
                </div>
                <br />
                <div class="form-group">
                    <label for="inputPassword" class="control-label">密碼</label>
                    <input name="password" class="form-control" placeholder="請輸入密碼" required="" type="password"></input>
                </div>
                <br />
                <div class="form-group">
                    <label for="inputPassword" class="control-label">辨識名稱</label>
                    <input name="name" class="form-control" placeholder="大安電研16th網管IU" required="" type="text"></input>
                </div>
                <br />
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="btn btn-lg btn-primary btn-block" type="submit">註冊</button>
            </form>
        </div>

@stop
