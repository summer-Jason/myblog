<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action='admin/httpget' method='get'>
			<table border='1' align='center' width="300px">
				<caption>用户注册</caption>
				<tr>
					<td align='right'>用户名:</td>
					<td><input type='text' name='username' placeholder="用户名"</td>
				</tr>
				<tr>
					<td align='right'>密码:</td>
					<td><input type='password' name='pwd' placeholder="密码"</td>
				</tr>
				<tr>
					<td align='right'>email:</td>
					<td><input type='text' name='email' placeholder="email"</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type='submit' value="注册">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>

