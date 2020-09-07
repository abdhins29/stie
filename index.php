<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STIE - PASAMAN</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="config/koneksi.php">
	<link rel="stylesheet" href="asset/css/main.css">
</head>
<body style="background-image: url(config/bg-u.jpg);">
<table width="798" border="0" align="center" cellpadding="0" cellspacing="0" class="border">
  <tr bgcolor="#FFFFFF">
<tr bgcolor="#336CA1"> 
    <td height="39" colspan="2" valign="top" bgcolor="#5E750B"><img src="images/header1.JPG" width="798" height="122">	</td>
  </tr>
</table>

<table width="798" border="" align="center" cellpadding="0" cellspacing="0">
  <tr bordercolor="#FF3300" bgcolor="#FF9900"> 
    <td height="22" colspan="3" bordercolor="#99FF00" bgcolor="#99FF00" class="HEAD"> 
      <marquee behavior="alternate" direction="left" scrollamount="1" scrolldelay="40">AKREDITASI “B” SK.BAN-PT NO.502/SK/BAN-PT/Akred/S/V/2015 TAHUN 2015
      </marquee>    </td>
  </tr>
 </table>
<form method="POST" action="login.php?op=in">
	<div class="container">
		<h2 class="form-group-heading">SILAHKAN LOGIN</h2>
			<div class="form-group">
				<input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
				<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
			<a href="regis.php">Untuk ALUMNI Silahkan Daftar Akun Disini?</a>
			</div>
		<button type="submit" id="login" name="login" class="btn btn-lg btn-primary btn-block">Log-In</button>
	</div>
</form>
</body>
	<script src="asset/js/jquery.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
</html>