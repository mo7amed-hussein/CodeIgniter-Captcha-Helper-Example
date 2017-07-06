<!DOCTYPE HTML>
<html>
<head>
    <title>CodeIgniter Captcha Helper Example</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"/> 
</head>

<body>
<div id="wrapper">
<div id="content">
<form action="<?php echo base_url().'index.php/CaptchaController/checkCaptcha';?>" method="post">
<div id="error">
<?php
if(isset($msg))
{
    echo $msg;
} 
?>
</div>
<div id="captchaImg">
<?php
echo $image; 
?>
</div>
<br />
<a href="#" id="refresh" class ="refresh">refresh Captcha</a>
<br /><br />
<label>Captcha </label>
<input  type="text" name="captcha" placeholder="type captcha here"/>
<br /><br />
<input type="submit" name="submit" value="submit"/>
</form>
</div>
</div>
<script src="<?php echo base_url(); ?>js/refresh.js"></script>
</body>
</html>