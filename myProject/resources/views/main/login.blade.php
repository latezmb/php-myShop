<!DOCTYPE html>
<html>
<head>
</head>
@include('model/header')
<body>
    <div class="container">
        <ul class="nav nav-tabs nav-pills" role="tablist"> 
            <li class="nav-item">
                <a href="#login" class="nav-link active" data-toggle="tab">登陆</a>
            </li>
            <li class="nav-item">
                <a href="#zhuce" class="nav-link" data-toggle="tab">注册</a>
            </li>
        </ul>
        <br/>
        <hr>
        <div class="tab-content">
        
        <!-- 登陆 -->
            <div id="login" class="container tab-pane active">
                <form action="{{url('logindo')}}" method="post">
                    <!--用户名 -->
                    <div class="row">
                        <div class="input-group mb-3 col-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text">用户名</span>
                            </div>
                            <input placeholder="输入用户名" id="usr" type="text" name="userName" class="form-control" required="required">
                        </div>
                    </div>
                    <!--用户名 end -->
					{!! csrf_field() !!}
                    <!--密码 -->
                    <div class="row">
                        <div class="input-group mb-3 col-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text">密&nbsp;&nbsp;&nbsp;码</span>
                            </div>
                            <input placeholder="输入密码" id="pass" type="password" name="password" class="form-control" required="required">
                        </div>
                    </div>

                    <!--密码 end -->
                    <button type="submit" class="btn btn-primary">登陆</button>
                </form>
            </div>
            <!-- 登陆END -->
            
            <!-- 注册 -->
            <div id="zhuce" class="container tab-pane fade">
                <form action="{{url('zhucedo')}}" method="post">
                    <!--用户名 -->
                    <div class="row">
                        <div class="input-group mb-3 col-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text">用户名</span>
                            </div>
                            <input placeholder="输入用户名" id="usr" type="text" name="userName" class="form-control" required="required">
                        </div>
                    </div>
                    <!--用户名 end -->

                    <!--手机号 -->
                    <div class="row">
                        <div class="input-group mb-3 col-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text">手机号</span>
                            </div>
                            <input placeholder="输入手机号" id="phone" type="text" name="phone" class="form-control" required="required">
                        </div>
                    </div>
                    <!--手机号 end -->
					{!! csrf_field() !!}
                    <!--邮箱 -->
                    <div class="row">
                        <div class="input-group mb-3 col-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text">邮&nbsp;&nbsp;&nbsp;箱</span>
                            </div>
                            <input placeholder="输入邮箱" id="email" type="text" name="email" class="form-control" required="required">
                        </div>
                    </div>
                    <!--邮箱 end -->

                    <!--密码 -->
                    <div class="row">
                        <div class="input-group mb-3 col-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text">密&nbsp;&nbsp;&nbsp;码</span>
                            </div>
                            <input placeholder="输入密码" id="pass" type="password" name="password" class="form-control" required="required">
                        </div>
                    </div>

                    <!--密码 end -->

                    <!--确认密码 -->
                    <div class="row">
                        <div class="input-group mb-3 col-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text">确认密码</span>
                            </div>
                            <input placeholder="输入密码" id="zpass" type="password" name="zpassword" class="form-control" required="required">
                        </div>
                    </div>

                    <!--确认密码 end -->

                    <button type="submit" class="btn btn-primary">注册</button>
                </form>
            </div>
            <!-- 注册 end -->
            
        </div>
    </div>
</body>
</html>