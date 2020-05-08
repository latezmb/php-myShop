<!-- resources/views/layouts/main.blade.php --> 
<!doctype html>
<html> 
    <head> 
        <meta charset="utf-8">
        <title>你好</title> 
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <style type="text/css">
    html {
    position: relative;
    min-height: 100%;
    }
    body {
        margin-bottom: 60px;
    }
    .footer {
        position: absolute;
        bottom: 0;  width: 100%;
        /* Set the fixed height of the footer here */
        height: 30px;
        background-color: #f5f5f5;
    }
   </style>
   
    </head> 
    <body> 
     <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('GradeDemo') }}">主页</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('GradeDemo/stuinf') }}">学生信息</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('GradeDemo/grade') }}">成绩信息</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('GradeDemo/grade') }}">欢迎你！用户：谢谢</a>
        </li>
      </ul>
        <div> 
        @section('content')
          <p>这是主模板的内容</p>
        @show      
        </div>
        <footer class="footer">
           <div class="container" style="text-align: center">
                power by 计算机与设计学院
            </div>
         </footer>
    </body> 
</html>