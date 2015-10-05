<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log in - Studytonight</title>
<meta name="description" content="Best place to learn Engineering subjects like Core Java, C++, DBMS etc  through Hand-written simple Tutorial, Tests and Interactive Coding Application. All for Free.">
<meta name="keywords" content="Core java Notes, C++ Notes, C language Notes, Studytonight, Lessons, Notes, Subjects, High School Notes, easy short lessons, Database technology Notes, DBMS, Tutorials, Programming Subjects"/> 
<meta property="og:image" content="http://www.studytonight.com/css/resource/favicon.png"/>

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="icon" type="image/png" href="css/resource/favicon.png">
<style>
.login-signup-form-container
{
width:360px;
margin:0px auto;
}
.login-signup-box
{
border:solid 1px #ccc;
padding:20px 50px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius:5px;
}
.input
{
border:solid 1px #ddd;
padding:8px;
width:240px;
}
.error_msg
{
font-size:12px;
color:red;
font-weight:bold;
background:#ffd8d8;
padding:3px;
}
</style>
</head>
<body>

<style>

.dropdown:hover ul{
    display:block;
}
.dropdown ul { 
    display: none;  
    position:absolute;
    background: rgba(0, 0, 0, 0.80); 
    width: 150px;   
    list-style-type:none;
    padding:10px;
} 
.dropdown ul li{
    padding:4px;
}
.dropdown ul li a{ 
    line-height:30px;
    cursor:pointer;
    text-decoration:none;
    color:white;
} 
.dropdown ul li a:hover{
   color:orange;
} 
.dropdown ul.second
{
    left: 300px;
}

</style>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=183470395085546";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<div class="nav-container">
<a class="brand" href="index.html" title="Take me Home :)"><img id="brand-icon" src="css/resource/st-icon.png" alt="studytonight logo"/></a>

<!-- <font color="orange">Study</font>tonight<sup><span id="beta">&#946;eta</span></sup> -->

<ul class="nav navbar-nav nav-left-responsive">
<li><a href="http://studytonight.com/online-courses/">VIDEO PLAYLISTS</a></li>
<li class="dropdown"><a href="http://studytonight.com/library/">TUTORIALS</a>

	<ul class="first">
            <li><a href="android-app-using-mit-appinventor">ANDROID</a></li>
            <li><a href="maven">APACHE MAVEN</a></li>
            <li><a href="c">C LANGUAGE</a></li>
            <li><a href="cpp.1">C++</a></li>
            <li><a href="computer-networks">COMPUTER NETWORKS</a></li>
            <li><a href="java">CORE JAVA</a></li>
      </ul>
      <ul class="second">
      	    <li><a href="dbms">DBMS</a></li>
            <li><a href="data-structures">DATA STRUCTURE</a></li>
            <li><a href="jenkins">JENKINS</a></li>
            <li><a href="jsp">JSP</a></li>
            <li><a href="operating-system">OPERATING SYSTEM</a></li>
            <li><a href="servlet">SERVLET</a></li>
       </ul>

</li>
<li><a href="http://studytonight.com/studyroom/">Q &amp; A FORUM</a></li>
<li><a href="http://studytonight.com/tests/">TESTS</a></li>
<li><a href="http://studytonight.com/code/">HTML COURSE<sup id='beta'>NEW</sup></a></li>
</ul>


<ul class="nav nav-fb-responsive">
<li class="nav-header">
<div class="fb-like" data-href="http://facebook.com/studytonight" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
</li>
</ul>


<ul class="nav pull-right-menuoption nav-right-responsive">
<li>
<form class="navbar-search" action="http://www.studytonight.com/search.php" method="GET"> 
<table>
<tr>
<td><input type="text" name="q" maxlength="255" value="" class="search-query span2" placeholder="Search" title="Search Studytonight for Lessons and Topics"/></td>
</tr>
</table>
</form>
</li>
<li><a href="login">LogIn</a></li>
<li><a style="font-weight:bold;color:#f84906;" href="register">SignUp</a></li>
<li><a href="suggest">Suggest</a></li>
</ul>
</div>
</div>
</div>

<div style="float:right;margin-right:100px;">
<div class="bookmark-responsive">
<div class="bookmark-ribbon traditional font-calibri">
<a href="collaborate" target="_blank"><div id="bookmark-text">
<div>WRITE</div><div>FOR US &amp;</div><div>GET PAID!</div>
</div></a>
</div></div></div><div class="container">
<div style="margin-top:30px;">
<div class="row">
<div class="login-signup-form-container">
<div><center><img src="css/resource/sr-logo.png" alt="studyRoom" title="Curious ? Get in Fast"></center></div><br/>
<div class="login-signup-box">
<form action="login.php" method="POST">
<div class="form-input-info">Username</div>
<div><input type="text" name="username" class="input" value="" PLACEHOLDER="Your username..." AUTOCOMPLETE="OFF"/></div>
<div class="form-input-info">Password</div>
<div><input type="password" name="password" class="input" PLACEHOLDER="Your password..." AUTOCOMPLETE="OFF"/></div>
<div style="margin-top:10px;"><input type="submit" value="Login" class="btn btn-success"/> or 
<b>
<a href='register.php'>Signup</a></b> for Studytonight</div>
</form>
<div><small><a href="passwordOffice">What is my Password ?</a></small></div>
</div>
<div><center><small>&copy; Studytonight 2013</small></center></div>
</div>
</div><!--row ends-->
</div>
</div><!-- Container Ends here--> 
</body>
</html>