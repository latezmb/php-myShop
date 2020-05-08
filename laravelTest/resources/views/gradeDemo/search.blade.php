<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>成绩查询</title>
</head>
<body>
	<h3>成绩查询</h3>
	<br/>
	<form action={{url("searchdo")}} method="post">
		输入学号<input type="text" name="studentId"/>
		{!!csrf_field()!!}
		<input type="submit" name="sub" value="查询"/>
	</form>
</body>
</html>