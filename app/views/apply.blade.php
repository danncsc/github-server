@extends('layout')

@section('contain')

        <div class="col-md-4 col-md-offset-4">
            <form class="form-signin" method="post">
                <center><h2 class="form-signin-heading">註冊</h2></center>
                <label for="inputPassword" class="sr-only">帳號</label>
                <input name="account" class="form-control" placeholder="請輸入帳號" required="" type="text"></input>
                <label for="inputPassword" class="sr-only">密碼</label>
                <input name="password" class="form-control" placeholder="請輸入密碼" required="" type="password"></input>
                <label for="inputPassword" class="sr-only">辨識名稱</label>
                <input name="name" class="form-control" placeholder="大安電研16th網管IU" required="" type="text"></input>
                <br />
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="btn btn-lg btn-primary btn-block" type="submit">註冊</button>
            </form>
        </div>

@stop
