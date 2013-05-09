<?php

define('EMAIL_FOR_REPORTS', 'erick.horror@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

require_once('registration_files/formoid1/handler.php');

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Kanban Board Project</title>
</head>
<body style="background-color:#EBEBEB">


<? if (frmd_message()): ?>
<link rel="stylesheet" href="registration_files/formoid1/formoid-default.css" type="text/css" />
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<? else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="registration_files/formoid1/formoid-default.css" type="text/css" />
<script type="text/javascript" src="registration_files/formoid1/jquery.min.js"></script>
<form enctype="multipart/form-data" class="formoid-default" style="background-color:#FFFFFF;font-size:16px;font-family:Tahoma,Geneva,sans-serif;width:480px" title="Kanban Board Project" method="post">
	<div class="element-text" ><h2 class="title">Registrate en Kanban Board</h2></div>
	<div class="element-input"  <?frmd_add_class("input")?>><label class="title">Nombre Completo<span class="required">*</span></label><input type="text" name="input" required="required"/></div>
	<div class="element-select"  <?frmd_add_class("select")?>><label class="title">Profesión<span class="required">*</span></label><select name="select" required="required">

		<option value="- Seleccione -">- Seleccione -</option><br/>
		<option value="first">first</option><br/>
		<option value="second">second</option><br/>
		<option value="third">third</option><br/></select></div>
	<div class="element-email"  <?frmd_add_class("email")?>><label class="title">Correo Electrónico<span class="required">*</span></label><input type="email" name="email" value="" required="required"/></div>
	<div class="element-input"  <?frmd_add_class("input1")?>><label class="title">Nombre de Usuario<span class="required">*</span></label><input type="text" name="input1" required="required"/></div>
	<div class="element-password"  <?frmd_add_class("password")?>><label class="title">Contraseña<span class="required">*</span></label><input type="password" name="password" value="" required="required"/></div>
	<div class="element-file"  <?frmd_add_class("file")?>><label class="title">Subir su imagen de identificación</label><input type="file" name="file" /></div>
	<div class="element-submit" ><input type="submit" value="Submit"/></div>

</form>
<script type="text/javascript" src="registration_files/formoid1/formoid-default.js"></script>

<p class="frmd"><a href="http://formoid.com/">Code For Html Form Formoid.com 1.5</a></p>
<!-- Stop Formoid form-->
<? endif; ?>


</body>
</html>
