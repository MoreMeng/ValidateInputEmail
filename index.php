<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Email Validation Example</title>

<!-- Bootstrap CSS -->
<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.2/yeti/bootstrap.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
.has-feedback,.form-control {
  position: relative;
}
</style>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div class="container">
	<div class="jumbotron">
		<div class="container">
			<h1>Email Validation Example!</h1>
			<p>
				<?php
				if (!empty($_POST)) {
					echo '<p><code>$_POST</code> value:</p><pre>';
					print_r($_POST);
					echo '</pre>';
				}
				?>
			</p>
		</div>
	</div>
</div>
<div class="container">
	<div class="col-md-8 col-md-offset-2">

	<!-- 1 -->
	<div >
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="badge">1</span> Simple JavaScript <code>alert("...")</code></h3>
			</div>
			<div class="panel-body">
				<form  class="form-inline" role="form" name="form1" action="" method="post" onsubmit="return check_mail()">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
							<input class="form-control" type="text" name="email1" placeholder="Email">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-primary">Submit</button>
							</span>
						</div>
					</div>
				</form>
			</div>
			<div class="panel-footer">ตั้งค่าให้ฟอร์มจับเหตุการณ์ขณะส่งค่า <code>onsubmit="return check_mail()"</code> ใช้ javascript พื้นฐาน สร้างเงื่อนไข if...else แล้ว return ค่า {true,false} กลับมาแสดงกล่องข้อความตอบโต้ <code>alert()</code></div>
		</div>
	</div>

	<!-- 2 -->
	<div >
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="badge">2</span> JavaScript with AJAX<code>getElementById()</code></h3>
			</div>
			<div class="panel-body">
				<form  class="form-inline"  role="form" name="form2" action="" method="post" onsubmit="return check_mail2()">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
							<input class="form-control" type="text" name="email2" id="email2" placeholder="Email">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-info">Submit</button>
							</span>
						</div>
					</div>
					<div id="error2"></div>
				</form>
			</div>
			<div class="panel-footer">ตั้งค่าให้ฟอร์มจับเหตุการณ์ขณะส่งค่า <code>onsubmit="return check_mail2()"</code> ใช้ javascript กับเทคโนโลยี AJAX สร้างเงื่อนไข if...else แล้ว return ค่า {true,false} กลับมาแสดงข้อความใน <code>&lt;div id="error2"&gt;&lt;/div&gt;</code> ด้วยคำสั่ง <code>document.getElementById("error2").innerHTML='...';</code></div>
		</div>
	</div>

	<!-- 3 -->
	<div >
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="badge">3</span> Pure HTML5 <code>&lt;input type="email"&gt;</code> without JavaScript </h3>
			</div>
			<div class="panel-body">
				<form  class="form-inline" role="form" name="form3" action="" method="post">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
							<input class="form-control" type="email" name="email1" placeholder="Email" required>
							<span class="input-group-btn">
								<button type="submit" class="btn btn-success">Submit</button>
							</span>
						</div>
					</div>
				</form>
			</div>
			<div class="panel-footer">รูปแบบการตรวจสอบนี้ขึ้นอยู่กับ browser ที่รองรับ tag ของ HTML5 เท่านั้น</div>
		</div>
	</div>

	<!-- 4 -->
	<div >
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="badge">4</span> jQuery Validation Plugin <code>Remote checking email available</code></h3>
			</div>
			<div class="panel-body">
				<form class="" role="form" name="form4" id="form4" action="" method="post">
					<div class="form-group has-feedback">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
							<input class="form-control" type="email" name="email4" id="email4" placeholder="Email" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
							<input class="form-control" type="text" name="customer" id="customer" placeholder="Your Name" required>
						</div>
					</div>
					<button type="submit" class="btn btn-warning">Submit</button>
				</form>
			</div>
			<div class="panel-footer">jquery valication plugin ทำให้ชีวิตง่ายขึ้นเยอะ ในที่นี้ผมทำการเช็ค 3 เงื่อนไข โดยต้องกรอก email, รูปแบบ email ถูกต้อง, และไม่ซ้ำกับที่อยู่ในระบบ โดยส่งค่าไปให้ไฟล์ <code>email-check-ajax.php</code> ตรวจสอบว่า email ที่กรอกนั้น ถูกใช้ไปหรือยังและ return ค่า {true,false} กลับมา ในที่นี้ถ้าไม่ใช่ <code>moremeng@dv4.biz</code> ก็สามารถใช้งานได้</div>
		</div>
	</div>
	</div>
</div>
<div class="container text-center">
	<a href="https://github.com/moremeng" class="text-muted"><i class="fa fa-github fa-3x fa-fw"></i></a>

</div>

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script>
function check_mail(){
	var vmail = document.form1.email1.value;
	var reg = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
	if (vmail == ""){
		alert ("กรอก email ด้วยครับ");
		document.form1.email1.focus();
		return false;
	}
	if (!(reg.test(vmail))) {
		alert ("รูปแบบของ email ไม่ถูกต้อง");
		document.form1.email1.focus();
		return false;
	}
}

function check_mail2(){
	var vmail = document.getElementById("email2").value;
	var reg = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
	if (vmail == ""){
		document.getElementById("error2").innerHTML='<em class="text-warning">*กรอก email ด้วยครับ</em>';
		document.form2.email2.focus();
		return false;
	}
	if (!(reg.test(vmail))) {
		document.getElementById("error2").innerHTML='<em class="text-danger">*รูปแบบของ email ไม่ถูกต้อง</em>';
		document.form2.email2.focus();
		return false;
	}
}

$.validator.setDefaults({
	highlight: function (element, errorClass, validClass) {
		if (element.type === "radio") {
			this.findByName(element.name).addClass(errorClass).removeClass(validClass);
		} else {
			$(element).closest('.form-group').removeClass('has-success').addClass('has-error has-feedback');
			$(element).closest('.form-group').find('i.fa-check').remove();
			$(element).closest('.form-group').append('<i class="fa fa-exclamation fa-lg form-control-feedback"></i>');
		}
	},
	unhighlight: function (element, errorClass, validClass) {
		if (element.type === "radio") {
			this.findByName(element.name).removeClass(errorClass).addClass(validClass);
		} else {
			$(element).closest('.form-group').removeClass('has-error');
			$(element).closest('.form-group').find('i.fa-exclamation').remove();
			$(element).closest('.form-group').append('<i class="fa fa-check fa-lg form-control-feedback"></i>');
		}
	},
	errorElement: 'span',
	errorClass: 'help-block',
	errorPlacement: function(error, element) {
		if(element.parent('.input-group').length) {
			error.insertAfter(element.parent());
		} else {
			error.insertAfter(element);
		}
	}
});
$("#form4").validate({

	rules: {
		email4: {
			required: true,
			email: true,
			remote: "email-check-ajax.php"
		}
	},
	onkeyup: false,
	messages: {
		email4: {
			required: "กรอก email ด้วยครับ",
			email: "รูปแบบของ email ไม่ถูกต้อง",
			remote: "Email นี้ถูกใช้งานแล้ว กรุณาเปลี่ยน"
		}
	}
});
</script>

</body>
</html>


