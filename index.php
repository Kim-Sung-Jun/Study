<!DOCTYPE html>
<html>
<head>
	<title>로그인</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>로그인</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>ID</label>
     	<input type="text" name="uname" placeholder="ID"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">로그인</button>
          <a href="signup.php" class="ca">회원가입</a>
     </form>
</body>
</html>
