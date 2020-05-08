<!doctype html>
<html> 
    <head> 
        <meta charset="utf-8">
        <title>复杂查询</title> 
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">    
    </head> 
    <body> 
     <div class="container">
    <h3>成绩查询(and查询)</h3>
    <form  class="form-inline"  role="form" action="{{url('ls20/grade')}}" method="post">          
            <label for="name">学号</label>
            <input type="text" class="form-control" name="xh" placeholder="请输入学号"> 
            <label for="name">科目</label>
            <input type="text" class="form-control" name="km" placeholder="请输入科目">    
            {!!csrf_field()!!}     
          <button type="submit" class="btn btn-default">查询</button>
    </form>
    <hr>
      <h3>学生信息查询(like查询or查询)</h3>
    <form  class="form-inline"  role="form" action="{{url('ls20/student')}}" method="post">          
            <label for="name">请输入关键字</label>
            <input type="text" class="form-control" name="keyword">   
            {!!csrf_field()!!}                  
          <button type="submit" class="btn btn-default">查询</button>
    </form>
    <hr>
        <h3>订单查询(日期查询)</h3>
    <form  class="form-inline"  role="form" action="{{url('ls20/order')}}" method="post">          
            <label for="name">开始日期</label>
            <input type="text" class="form-control" name="stime" value="2017-12-21">  
             <label for="name">结束日期</label>
            <input type="text" class="form-control" name="etime" value="2017-12-22">  
            {!!csrf_field()!!}                  
          <button type="submit" class="btn btn-default">查询</button>
    </form>
    </div>
    </body> 
</html>