<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<p>Hi <?php //echo $v_email; ?>,</p>
<p>We're so happy to have you onboard!</p>
<!--  p>To prove you are human, please verify your account by clicking the following link:<br/>
<a href="<?php //echo Config::get('constant.SITE'); ?>ausers/activation/<?php //echo "1";?>"><?php //echo Config::get('constant.SITEURLADM'); ?>users/activation/<?php //echo "1"; ?></a>
</p-->
<p>Your Login Detail</p>
<p>Email: <?php echo $v_email; ?></p>
<p>Password : <?php echo $password; ?></p>
<p>Thanks<br />
Mother Care Tool
</p>
</body>
</html>