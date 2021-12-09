<!--*
 * Ultra Facebook Clone Modify By Ultraviolet
 * From : www.ultraviolet-developer.com | Jasa Pembuatan Website |
 * 
 * Copyright 2015 Ultraviolet Developer (email: ultravioletdev1@gmail.com / verlyananda@gmail.com)
 * Donation : 087722-836-330 (VerlyAnanda)
 * 
 * 
 * 
 */-->
<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	//unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<link rel="icon" href="images/App-share-manager-icon.png" type="image" />
<link rel="shortcut icon" href="images/App-share-manager-icon.png" type="image" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>UltraFacebook Clone </title>
<link href="front.css" media="screen, projection" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	color: #3399CC;
	font-weight: bold;
}
.slidingDiv {
	height:543px;
	background-color: #DDEEF6;
	padding:10px;
	margin-top:0px;
	border-bottom:5px solid #3399FF;
	color:#2277BB;
}

.show_hide {
	display:none;
}
-->
</style>


<script type="text/javascript">
function validateForm()
{

var a=document.forms["regester"]["fname"].value;
var b=document.forms["regester"]["lname"].value;
var d=document.forms["regester"]["address"].value;
var e=document.forms["regester"]["city"].value;
var f=document.forms["regester"]["contact"].value;
var g=document.forms["regester"]["emailadd"].value;
var h=document.forms["regester"]["password"].value;
var i=document.forms["regester"]["rpassword"].value;
var j=document.forms["regester"]["gender"].value;
var k=document.forms["regester"]["bday"].value;

if ((a==null || a==""))
  {
  alert("Isi dulu  firstnname nya");
  return false;
  }
if ((b==null || b==""))
  {
  alert("Isi dulu lastnamenya");
  return false;
  }
if ((d==null || d==""))
  {
  alert("Isi dulu  email address");
  return false;
  }
if ((e==null || e==""))
  {
  alert("Isi dulu  city");
  return false;
}
if ((f==null || f==""))
  {
  alert("Isi dulu  contact");
  return false;
  }
if ((g==null || g==""))
  {
  alert("Isi dulu  emailadd");
  return false;
  }
if ((h==null || h==""))
  {
  alert("Isi dulu password");
  return false;
  }
if ((j==null || j==""))
  {
  alert("Isi dulu  gender");
  return false;
  }
if ((k==null || k==""))
  {
  alert("Isi dulu  birthday");
  return false;
  }
if( h != i ) {
alert("Password does gak sama");
  return false;
}
var atpos=g.indexOf("@");
var dotpos=g.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=g.length)
  {
  alert("Not a valid e-mail address");
  return false;
  } 

}
</script>

<!--start pop-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  <!--end pop-->
<!--sa calendar-->
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
<!--end calendar-->

<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:515px;
	top:116px;
	width:535px;
	height:373px;
	z-index:1;
}
.style2 {
	font-size: 12px;
	font-weight: bold;
	color: #FFFFFF;
}
body {
	background-color: #000000;
}
.style3 {
	color: #FFFFFF;
	font-size: 10px;
}
.style4 {color: #2277BB}
.style5 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 16px;
}
-->
</style>
</head>
<body>
<div id="container">
  <div id="topnav" class="topnav" style="width: 683px;">
    <div align="right"><span class="style5">Facebook Timeline</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style2">Have an account?</span> <a href="login" class="signin style4">Sign in</a> </div>
  </div>
  <p>&nbsp;</p>
  <fieldset id="rerrer">
    <form action="regester.php" method="post" name="regester" onsubmit="return validateForm()">
	<p class="style1"><a href="#" class="show_hide style3"><b>Regestre Here</b></a></p>
	<div class="slidingDiv">
	<br />
      <label for="username">FirstName</label>
      <input id="fname" name="fname" type="text" />
      </p>
      <p>
        <label for="password">LastName</label>
        <input id="lname" name="lname" type="text">
      </p>
	  <p>
        <label for="password">Address</label>
        <input id="address" name="address" type="text">
      </p>
	  <p>
        <label for="password">City</label>
        <input id="city" name="city" type="text">
      </p>
	  <p>
        <label for="password">Contact</label>
        <input id="contact" name="contact" type="text">
      </p>
	  <p>
        <label for="password">Email Address</label>
        <input id="emailadd" name="emailadd" type="text">
      </p>
	  <p>
        <label for="password">Password</label>
        <input name="password" type="password" id="password" />
      </p>
	  <p>
        <label for="password">Re-type password</label>
        <input name="rpassword" type="password" id="rpassword" />
      </p>
	  <p>
        <label for="gender">Gender</label>
        <select name="gender" class="fgh">
      <option>Select-here</option>
      <option>Male</option>
      <option>Female</option>
      &nbsp;
    </select>
      </p>
	  <p>
        <label for="password">BirthDay</label>
        <input name="bday" type="text" class="tcal" id="fgh"/>
      </p>
      <p class="remember">
        <input id="signin_submit" value="Save"  type="submit">
        
      </p>
      </div>
    </form>
  </fieldset>
  
  
  
  
  
  <fieldset id="signin_menu" style="margin-right: 97px;">
    <form method="post" id="signin" action="login.php">
      <label for="username">Username or email</label>
      <input id="username" name="username" title="username" tabindex="4" type="text">
      </p>
      <p>
        <label for="password">Password</label>
        <input id="password1" name="password1" title="password1" tabindex="5" type="password">
      </p>
      <p class="remember">
        <input id="signin_submit" value="Sign in" tabindex="6" type="submit">
      </p>
    </form>
  </fieldset>
</div>
<div align="center">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<img src="images/b.jpg" alt="" width="800" height="608" style="margin-top: -50px;" />
<script type="text/javascript">

$(document).ready(function(){


    $(".slidingDiv").hide();
	$(".show_hide").show();
	
	$('.show_hide').click(function(){
	$(".slidingDiv").slideToggle();
	});

});

</script>


<script src="javascripts/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
        $(document).ready(function() {

            $(".signin").click(function(e) {          
				e.preventDefault();
                $("fieldset#signin_menu").toggle();
				$(".signin").toggleClass("menu-open");
            });
			
			$("fieldset#signin_menu").mouseup(function() {
				return false
			});
			$(document).mouseup(function(e) {
				if($(e.target).parent("a.signin").length==0) {
					$(".signin").removeClass("menu-open");
					$("fieldset#signin_menu").hide();
				}
			});			
			
        });
</script>
<script src="javascripts/jquery.tipsy.js" type="text/javascript"></script>
<script type='text/javascript'>
    $(function() {
	  $('#forgot_username_link').tipsy({gravity: 'w'});   
    });
  </script>
</div>
</body>
</html>