<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Steps to Create Servlet Application using Tomcat server | Servlet Tutorial | Studytonight</title>

<meta name="keywords" content="Servlet tutotials, Servlet technology notes, Advance Java tutorials, J2EE notes, Servlet request, Servlet response, Web application, Servlet Context, HttpSession, Attributes, Servlet Config, Servlet Life cycle, Filters, Session, Servlet Events and Listeners, Cookies in Servlet, Creating Servlet Application with Tomcat, Servlet with Tomcat Server, first servlet application" />
<meta name="description" content="Learn the Steps to create a Servlet using Tomcat server in this lesson of Servlet Technology tutorial."/>

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
<a href="steps-to-create-servlet-using-tomcat-server.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<h3>Steps to Create Servlet Application using tomcat server</h3>
<p>
To create a Servlet application you need to follow the below mentioned steps. These steps are common for all the Web server. In our example we are using Apache Tomcat server. Apache Tomcat is an open source web server for testing servlets and JSP technology. Download latest version of <a href="http://tomcat.apache.org/" target="_blank" rel="nofollow"><span class="orange">Tomcat Server</span></a> and install it on your machine.
</p>
<p>After installing Tomcat Server on your machine follow the below mentioned steps :</p>
<ol class="content">
<li>Create directory structure for your application.</li>
<li>Create a Servlet</li>
<li>Compile the Servlet</li>
<li>Create Deployement Descriptor for your application</li>
<li>Start the server and deploy the application</li>
</ol>
<p>All these 5 steps are explained in details below, lets create our first Servlet Application.</p>
<hr/>
<h4>1. Creating the Directory Structure</h4>
<p>
Sun Microsystem defines a unique directory structure that must be followed to create a servlet application.
</p>
<p class="center"><img src="images/servlet-directory-structure.jpg" alt="servlet directory strucutre" /></p>
<p>Create the above directory structure inside <b>Apache-Tomcat\webapps</b> directory. All HTML, static files(images, css etc) are kept directly under <b>Web application</b> folder. While all the Servlet classes are kept inside <code>classes</code> folder.</p> 
<p>The <code>web.xml</code> (deployement descriptor) file is kept under <code>WEB-INF</code> folder.
</p>
<hr/>
<h4>Creating a Servlet</h4>
<p>
There are three different ways to create a servlet.</p>
<ul class="content">
<li>By implementing <b>Servlet</b> interface</li>
<li>By extending <b>GenericServlet</b> class</li>
<li>By extending <b>HttpServlet</b> class</li>
</ul>
<p> 
But mostly a servlet is created by extending <b>HttpServlet</b> abstract class. As discussed earlier <b>HttpServlet</b> gives the definition of <code>service()</code> method of the <b>Servlet</b> interface. The servlet class that we will create should not override <code>service()</code> method. Our servlet class will override only <code>doGet()</code> or <code>doPost()</code> method. 
</p>
<p>
When a request comes in for the servlet, the Web Container calls the servlet's <code>service()</code> method and depending on the type of request the <code>service()</code> method calls either the <code>doGet()</code> or <code>doPost()</code> method.
</p>
<p><b>NOTE:</b> By default a request is <b>Get</b> request.</p>
<pre>
import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;

public <i>MyServlet</i> <b>extends</b> HttpServlet
{
 public void <i>doGet</i>(HttpServletRequest request,HttpServletResposne response) 
                     <b>throws</b> ServletException
 {
   response.setContentType("text/html");
   PrintWriter <i>out</i> = response.getWriter();
   out.println("&lt;html&gt;&lt;body&gt;");
   out.println("&lt;h1&gt;Hello Readers&lt;/h1&gt;");
   out.println("&lt;/body&gt;&lt;/html&gt;");
 }
}
</pre>
<p>
Write above code in a notepad file and save it as <b>MyServlet.java</b> anywhere on your PC. Compile it(explained in next step) from there and paste the class file into <code>WEB-INF/classes/</code> directory that you have to create inside <b>Tomcat/webapps</b> directory.
</p>
<hr/>
<h4>Compiling a Servlet</h4>
<p>
To compile a Servlet a JAR file is required. Different servers require different JAR files. In Apache Tomcat server <code>servlet-api.jar</code> file is required to compile a servlet class. 
</p>
<p>Steps to compile a Servlet</p>
<ul class="content">
<li>Set the Class Path.</li>
<p class="center"><img src="images/setting-classpath.jpg" alt="compiling a Servlet"/></p>
<li>Download <b>servlet-api.jar</b> file.</li>
<li>Paste the servlet-api.jar file inside <code>Java\jdk\jre\lib\ext</code> directory.</li>
<p class="center"><img src="images/compile-a-servlet-class.jpg" alt="compiling a Servlet"/></p>
<li>Compile the Servlet class.</li>
<p class="center"><img src="images/compile-servlet.jpg" alt="compiling a Servlet"/></p>
</ul>
<p><b>NOTE: </b>After compiling your Servlet class you will have to paste the class file into <code>WEB-INF/classes/</code> directory.</p>
<hr/>
<h4>Create Deployment Descriptor</h4>
<p>
<b>Deployment Descriptor(DD)</b> is an XML document that is used by Web Container to run Servlets and JSP pages. DD is used for several important purposes such as:
</p>
<ul class="content">
<li>Mapping URL to Servlet class.</li>
<li>Initializing parameters.</li>
<li>Defining Error page.</li>
<li>Security roles.</li>
<li>Declaring tag libraries.</li>
</ul>
<p>We will discuss about all these in details later. Now we will see how to create a simple <b>web.xml</b> file for our web application.</p>
<p class="center"><img src="images/web-xml-file.jpg" alt="web.xml file" /></center>
</p>
<hr/>
<h4>Start the Server</h4>
<p>
Double click on the <b>startup.bat</b> file to start your Apache Tomcat Server.
</p>
<p>
Or, execute the following command on your windows machine using RUN prompt.
</p>
<pre>
C:\apache-tomcat-7.0.14\bin\startup.bat
</pre>
<hr/>
<h4>Starting Tomcat Server for the first time</h4>
<p>
If you are starting Tomcat Server for the first time you need to set JAVA_HOME in the Enviroment variable. The following steps will show you how to set it.
</p>
<ul class="content">
<li>Right Click on <b>My Computer</b>, go to <b>Properites</b>.</li>
<p class="center"><img src="images/setting-java-home-for-tomcat.jpg" alt="setting JAVA_HOME for Tomcat" /></p>
<li>Go to <b>Advanced</b> Tab and Click on <b>Enviroment Variables...</b> button.</li>
<p class="center"><img src="images/setting-java-home-for-tomcat1.jpg" alt="setting JAVA_HOME for Tomcat" /></p>
<li>Click on <b>New</b> button, and enter <b>JAVA_HOME</b> inside Variable name text field and path of JDK inside Variable value text field. Click OK to save.</li>
<p class="center"><img src="images/setting-java-home-for-tomcat2.jpg" alt="setting JAVA_HOME for Tomcat" /></p>
</ul>
<hr/>
<h4>Run Servlet Application</h4>
<p>
Open Browser and type <b>http:localhost:8080/First/hello</b>
</p>
<p class="center"><img src="images/run-servlet-application.jpg" alt="Running first servlet application" /></p>
<p>Hurray! Our first Servlet Application ran successfully.</p>
<hr/>
<div><ul class="pager">
<li class="previous">
<a href="servlet-life-cycle">&larr; Prev</a>
</li>
  <li class="next">
    <a href="creating-servlet-in-netbeans">Next &rarr;</a>
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