@extends('layout')

@section('contain')

        <div class="col-md-4 col-md-offset-4">
            <form class="form-signin" method="post">
                <center><h2 class="form-signin-heading">註冊</h2></center>
                <label for="inputPassword" class="sr-only">帳號</label>
                <input name="account" class="form-control" placeholder="請輸入帳號" required="" type="text"></input>
                <label for="inputPassword" class="sr-only">密碼</label>
                <input name="password" class="form-control" placeholder="請輸入密碼" required="" type="password"></input>
                <label for="inputPassword" class="sr-only">姓名</label>
                <input name="password" class="form-control" placeholder="請輸入密碼" required="" type="text"></input>
                <br />
                <button class="btn btn-lg btn-primary btn-block" type="submit">登入</button>
            </form>
        </div>

@stop