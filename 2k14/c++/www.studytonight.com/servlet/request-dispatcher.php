<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Introduction to Resquest Dispatcher | Servlet Tutorial | Studytonight</title>

<meta name="keywords" content="Servlet tutotials, Servlet technology notes, Advance Java tutorials, J2EE notes, Servlet request, Servlet response, Web application, Servlet Context, HttpSession, Attributes, Servlet Config, Servlet Life cycle, Filters, Session, Servlet Events and Listeners, Cookies " />
<meta name="description" content="RequestDispatcher is an interface, implementation of which defines an object which can dispatch request to any resources(such as HTML, Image, Jsp, Servlet) on the server"/>

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le styles -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link rel="icon" type="image/png" href="../css/resource/favicon.png">


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
<a class="brand" href="../index.html" title="Take me Home :)"><img id="brand-icon" src="../css/resource/st-icon.png" alt="studytonight logo"/></a>

<!-- <font color="orange">Study</font>tonight<sup><span id="beta">&#946;eta</span></sup> --> 

<ul class="nav navbar-nav nav-left-responsive">
<li><a href="http://studytonight.com/online-courses/">VIDEO PLAYLISTS</a></li>
<li class="dropdown"><a href="http://studytonight.com/library/">TUTORIALS</a>

	<ul class="first">
            <li><a href="../android-app-using-mit-appinventor">ANDROID</a></li>
            <li><a href="../maven">APACHE MAVEN</a></li>
            <li><a href="../c">C LANGUAGE</a></li>
            <li><a href="../cpp.1">C++</a></li>
            <li><a href="../computer-networks">COMPUTER NETWORKS</a></li>
            <li><a href="../java">CORE JAVA</a></li>
      </ul>
      <ul class="second">
      	    <li><a href="../dbms">DBMS</a></li>
            <li><a href="../data-structures">DATA STRUCTURE</a></li>
            <li><a href="../jenkins">JENKINS</a></li>
            <li><a href="../jsp">JSP</a></li>
            <li><a href="../operating-system">OPERATING SYSTEM</a></li>
            <li><a href="../servlet">SERVLET</a></li>
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
<li><a href="../login">LogIn</a></li>
<li><a style="font-weight:bold;color:#f84906;" href="../register">SignUp</a></li>
<li><a href="../suggest">Suggest</a></li>
</ul>
</div>
</div>
</div>

<div style="float:right;margin-right:100px;">
<div class="bookmark-responsive">
<div class="bookmark-ribbon traditional font-calibri">
<a href="../collaborate" target="_blank"><div id="bookmark-text">
<div>WRITE</div><div>FOR US &amp;</div><div>GET PAID!</div>
</div></a>
</div></div></div>

<!--  Event Bannner Space

<div class="container">
<div class="row">
<div class="span12"><a href="http://studytonight.com/event"><img src="http://studytonight.com/css/codetonight-banner.png" alt="Codetonight for Java Programmers" title="Click to Register for Codetonight"/></a></div>
</div></div> -->
<div class="row">
	<div class="head-bar-servlet">	
	<div class="container"><div id="subject-name">
	
		SERVLET TECHNOLOGY
	</div></div>
<div id="subject-info">
<div class="container">
<div id="sm-button">

<!-- AddThis Button BEGIN -->
<div class="addthis">
<div class="addthis_toolbox addthis_default_style">
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<script type="text/javascript">
<!--
document.write('<a class="addthis_button_google_plusone" g:plusone:count="false"></a>');
//-->
</script>
<a class="addthis_button_linkedin"></a>
<a class="addthis_button_email"></a>

<!-- <a class="addthis_button_compact"></a> -->

</div>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4fcb15e01d1a671c"></script>
</div>
<!-- AddThis Button END -->

</div>
<div>" Servlet Technology is used to create secure and portable web application. "</div>

</div>

</div>
</div>
</div><!-- Common sub nav bar for all the lesson page, currently holding Google Adsense Code -->

<div class="center plain-text-ad-style" style="margin-bottom:10px;">
<div class="container">
<div class="row">
<div class="span12">
	<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Sidebar Responsive Ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6137246359299957"
     data-ad-slot="5741724623"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>	
</div>
</div>
<div class="container">
<div class="row">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../js/jquery.tipsy.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
$('.sidebar-social-button').tipsy({gravity: 'e'});

$('#slide-toggle-sidebar').on('click', function(){
        $('#sidebar-menu').css('width','100%');
	$('#sidebar-menu').slideToggle();
	return false;
});

});
</script>
<link href="../css/tipsy_title.css" rel="stylesheet">

<div class="span3">

<div class="sidebar-collpsed-responsive">
<a href="request-dispatcher.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
</div>

<div id="sidebar-menu">
<div class="sidebar-social-button" title="Share this Lesson with your friends">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4fcb15e01d1a671c"></script>
<!-- AddThis Button END -->
</div>
<hr/>
<ul class="sidebar">
<li class="main"><b>Servlet Basics</b></li>
<li><a href="introduction-to-web.php">Introduction to Web</a></li>
<li><a href="introduction-to-servlet.php">Introduction to Servlet</a></li>
<li><a href="servlet-api.php">Servlet API</a></li>
<li><a href="how-a-servlet-application-work.php">How a servlet application work</a></li>
<li><a href="servlet-life-cycle.php">Servlet Life Cycle</a></li>
<li><a href="steps-to-create-servlet-using-tomcat-server.php">Steps to create servlet using Tomcat server</a></li>
<li><a href="creating-servlet-in-netbeans.php">Steps to create servlet in Netbeans IDE</a></li>
<li><a href="creating-servlet-in-eclipse.php">Steps to create servlet in Eclipse IDE</a></li>
<li class="main"><b>Servlet Request and Response</b></li>
<li><a href="servlet-request.php">Servlet Request</a></li>
<li><a href="servlet-response.php">Servlet Response</a></li>
<li><a href="request-dispatcher.php">Request Dispatcher</a></li>
<li><a href="sendredirect-method.php">sendRedirect method</a></li>
<li><a href="servlet-config.php">ServletConfig interface</a></li>
<li><a href="servlet-context.php">ServletContext interface</a></li>
<li><a href="attribute.php">Attribute</a></li>
<li class="main"><b>Session Management</b></li>
<li><a href="session-management.php">How session work</a></li>
<li><a href="httpsession.php">HttpSession</a></li>
<li><a href="storing-session-using-cookies.php">Cookies</a></li>
<li><a href="url-rewriting-for-session-management.php">URL rewriting</a></li>
<li><a href="hidden-form-field.php">Hidden form field</a></li>
<li class="main"><b>Event and Listeners</b></li>
<li><a href="servlet-context-listener.php">ServletContextEvent and ServletContextListener</a></li>
<li><a href="attribute-listener.php">Attribute Listener</a></li>
<li><a href="httpsession-event-and-listener.php">HttpSessionEvent and HttpSessionListener</a></li>
<li><a href="servlet-request-event-and-listener.php">ServletRequestEvent and ServletRequestListener</a></li>
<li class="main"><b>Filters</b></li>
<li><a href="filter-api.php">Filter API</a></li>
<li class="main"><b>Important Example</b></li>
<li><a href="registration-form-example-in-servlet.php">Registration form</a></li>
<li><a href="login-system-example-in-servlet.php">Login system</a></li>
<li><a href="Sending-email-using-servlet.php">Sending Email</a></li>
</ul>
<hr/>
<div class="sidebar-info-box">
<div class="lessbold-title">Test Yourself !</div>
<br/><p>If you have studied all the lessons of Servlet, then evaluate yourself by taking these tests.</p>
<p><a href="http://www.studytonight.com/servlet/tests/" class="btn btn-success btn-block">Servlet Topical Test</a></p>
</div>
<br/>
<p style="margin-left:2px;">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- square-200 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:200px;height:200px"
     data-ad-client="ca-pub-6137246359299957"
     data-ad-slot="8342031027"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</p>
</div>
</div><div class="span9">
<div id="body-content">
<h3>Introduction to Request Dispatcher</h3>
<p><b>RequestDispatcher</b> is an interface, implementation of which defines an object which can dispatch request to any resources(such as HTML, Image, JSP, Servlet) on the server.</p>
<hr/>
<h4>Methods of RequestDispatcher</h4>
<p><b>RequestDispatcher</b> interface provides two important methods</p>
<table class="table table-bordered table-striped">
<tr><th>Methods</th><th>Description</th></tr>
<tr><td>void <code>forward(ServletRequest request, ServletResponse response)</code></td><td>forwards a request from a servlet to another resource (servlet, JSP file, or HTML file) on the server</td></tr>
<tr><td>void <code>include(ServletRequest request, ServletResponse response)</code></td><td> includes the content of a resource (servlet, JSP page, HTML file) in the response</td></tr>
</table>
<hr/>
<h4>How to get an Object of RequestDispatcher</h4>
<p><code>getRequestDispatcher()</code> method of <b>ServletRequest</b> returns the object of <b>RequestDispatcher</b>.
</p>
<pre>
RequestDispatcher <i>rs</i> = request.<b>getRequestDispatcher</b>("hello.html");
rs.<b>forward</b>(request,response);
</pre>
<p class="center"><img src="images/request-dispatcher.jpg" alt="RequestDispatcher detail and instantiation using forward" /></p>
<p class="center"><b>OR</b></p>
<pre>
RequestDispatcher <i>rs</i> = request.<b>getRequestDispatcher</b>("hello.html");
rs.<b>include</b>(request,response);
</pre
<p class="center"><img src="images/request-dispatcher1.jpg" alt="RequestDispatcher detail and instantiation using include" /></p>
<hr/>
<h4>Example demonstrating usage of RequestDispatcher</h4>
<p>In this example, we will show you how RequestDispatcher is used to <b>forward</b> or <b>include</b> response of a resource in a Servlet. Here we are using <b>index.html</b> to get username and password from the user, <b>Validate</b> Servlet will validate the password entered by the user, if the user has entered "studytonight" as password, then he will be forwarded to <b>Welcome</b> Servlet else the user will stay on the index.html page and an error message will be displayed.</p>
<p><b>Files to be created :</b></p>
<ul class="content">
<li><b>index.html</b> will have form fields to get user information.</li>
<li><b>Validate.java</b> will validate the data entered by the user.</li>
<li><b>Welcome.java</b> will be the welcome page.</li>
<li><b>web.xml</b> , the deployment descriptor.</li>
</ul> 
<p><b>index.html</b></p>
<pre>
&lt;form method=&quot;<b>post</b>&quot; action=&quot;<font color="blue"><b>Validate</b></font>&quot;&gt;
Name:&lt;input type=&quot;text&quot; name=&quot;user&quot; /&gt;&lt;br/&gt;
Password:&lt;input type=&quot;password&quot; name=&quot;pass&quot; &gt;&lt;br/&gt;
&lt;input type=&quot;submit&quot; value=&quot;submit&quot;&gt;
&lt;/form&gt;
</pre>
<p><b>Validate.java</b></p>
<pre>
import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class <i>Validate</i> <b>extends</b> HttpServlet {

   protected void <b>doPost</b>(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
      response.setContentType("text/html;charset=UTF-8");
     PrintWriter out = response.getWriter();
     try {
         String <b>name</b> = request.getParameter("user");
        String <b>password</b> = request.getParameter("pass");

        if(<b>password</b>.equals("studytonight"))
        {
           RequestDispatcher <i>rd</i> = request.<b>getRequestDispatcher</b>("Welcome");
           rd.<b>forward</b>(request, response);
        }
        else
         {
         out.println(&quot;&lt;font color='red'&gt;&lt;b&gt;You have entered incorrect password&lt;/b&gt;&lt;/font&gt;&quot;);
                RequestDispatcher <i>rd</i> = request.<b>getRequestDispatcher</b>("index.html");
                rd.<b>include</b>(request, response);
            }
        }finally {            
            out.close();
        }
        
    }
}
</pre>
<p><b>Welcome.java</b></p>
<pre>
import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
public class <i>Welcome</i> <b>extends</b> HttpServlet {

   protected void <b>doPost</b>(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter <b>out</b> = response.getWriter();
        try {
            
            out.println(&quot;&lt;h2&gt;Welcome user&lt;/h2&gt;&quot;);
        } finally {            
            out.close();
        }
    }
}
</pre>
<p><b>web.xml</b></p>
<pre>
&lt;web-app&gt;
    &lt;servlet&gt;
        &lt;servlet-name&gt;Validate&lt;/servlet-name&gt;
        &lt;servlet-class&gt;Validate&lt;/servlet-class&gt;
    &lt;/servlet&gt;
    &lt;servlet&gt;
        &lt;servlet-name&gt;Welcome&lt;/servlet-name&gt;
        &lt;servlet-class&gt;Welcome&lt;/servlet-class&gt;
    &lt;/servlet&gt;
    &lt;servlet-mapping&gt;
        &lt;servlet-name&gt;Validate&lt;/servlet-name&gt;
        &lt;url-pattern&gt;/Validate&lt;/url-pattern&gt;
    &lt;/servlet-mapping&gt;
    &lt;servlet-mapping&gt;
        &lt;servlet-name&gt;Welcome&lt;/servlet-name&gt;
        &lt;url-pattern&gt;/Welcome&lt;/url-pattern&gt;
    &lt;/servlet-mapping&gt;
    &lt;welcome-file-list&gt;
        &lt;welcome-file&gt;index.html&lt;/welcome-file&gt;
        &lt;/welcome-file-list&gt;
&lt;/web-app&gt;
</pre>
<hr/>
<p>This will be the first screen. You can enter your Username and Password here.</p>
<p class="center"><img src="images/request-dispatcher-output1.jpg" alt="request dispatcher example" /></p>
<hr/>
<p>When you click on Submit, Password will be validated, if it is not 'studytonight' , error message will be displayed.</p>
<p class="center"><img src="images/request-dispatcher-output2.jpg" alt="request dispatcher example" /></p>
<hr/>
<p>Enter any Username, but enter 'studytonight' as password.</p>
<p class="center"><img src="images/request-dispatcher-output3.jpg" alt="request dispatcher example" /></p>
<hr/>
<p>Password will be successfully validated and you will be directed to the Welcome Servlet.</p>
<p class="center"><img src="images/request-dispatcher-output4.jpg" alt="request dispatcher example" /></p>
<hr/>
<div><ul class="pager">
<li class="previous">
<a href="servlet-response">&larr; Prev</a>
</li>
<li class="next">
<a href="sendredirect-method">Next &rarr;</a>
</li>
</ul></div>

</div>
</div>

</div>

</div><!-- Container Ends here--> 

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39722043-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<div id="footer">
<div class="container">
<div id="footer-box">

<div id="footer-box-right">Check Out :  
<a href="../library"><span class="label">Library</span></a>&nbsp;&nbsp;
<a href="../online-courses"><span class="label">Video Courses</span></a>&nbsp;&nbsp;
<a href="../studyroom"><span class="label">Studyroom</span></a>&nbsp;&nbsp;
<a href="../flashcards"><span class="label">Flashcards</span></a>&nbsp;&nbsp;
</div>

<div id="footer-box-left">

<p>&copy; Studytonight 2014 &middot; <span><img src="../css/resource/icon-heart-small.png"/>Handcrafted with Love</span></p>

<p><a href="../about">About Us</a> &middot; <a href="../suggest">Suggest</a> &middot; <a href="../terms">Terms</a> &middot; <a href="../contact">Contact Us</a> &middot; <a href="../collaborate">Collaborate</a> &middot; <a href="../authors.1">Authors</a> &middot; <a href="http://studytonight.tumblr.com/">Blog</a></p>


</div>

</div>  <!-- /footer-box -->
<div class="row">
<div class="span12 center">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Responsive Footer Ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6137246359299957"
     data-ad-slot="1965829825"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>
</div> <!-- /container -->
</div>  <!-- /footer -->
</body>
</html>