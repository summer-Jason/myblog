<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action='admin/gpost' method='post'>
			<table border='1' align='center' width="300px">
				<caption>用户注册</caption>
				<tr>
					<td align='right'>用户名:</td>
					<td><input type='text' name='username' value="{{ old('username')}}" </td>
				</tr>
				<tr>
					<td align='right'>密码:</td>
					<td><input type='password' name='pwd'value="{{old('pwd')}}" placeholder="密码"</td>
				</tr>
				<tr>
					<td align='right'>email:</td>
					<td><input type='text' name='email' value="{{old('email')}}" placeholder="email"</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type='submit' value="注册">
					</td>
				</tr>
			</table>
			{{csrf_field()}}
		</form>
	</body>
</html>