<!DOCTYPE html>
<html>
@include('model/header')
<body>
<div class="container">
        <ul class="nav nav-tabs nav-pills" role="tablist"> 
            <li class="nav-item">
                <a href="#zhuce" class="nav-link active" data-toggle="tab">修改个人信息</a>
            </li>
        </ul>
        <br/>
        <hr>
        <div class="tab-content">
            <!-- 修改 -->
            <div id="zhuce" class="container tab-pane active">
                <form action="{{url('updateInfordo')}}" method="post">
                    <!--用户名 -->
                    <div class="row">
                        <div class="input-group mb-3 col-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text">用户名</span>
                            </div>
                            <input placeholder="输入用户名" id="usr" value="{{$data->username}}" type="text" name="userName" class="form-control" required="required" disabled="disabled">
                        </div>
                    </div>
                    <!--用户名 end -->

                    <!--手机号 -->
                    <div class="row">
                        <div class="input-group mb-3 col-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text">手机号</span>
                            </div>
                            <input placeholder="输入手机号" id="phone" value="{{$data->phone}}" type="text" name="phone" class="form-control" required="required">
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
                            <input placeholder="输入邮箱" id="email" value="{{$data->email}}" type="text" name="email" class="form-control" required="required">
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

                    <button type="submit" class="btn btn-primary">修改</button>
                </form>
            </div>
            <!-- 修改 end -->
            
        </div>
    </div>
    
</body>
</html>