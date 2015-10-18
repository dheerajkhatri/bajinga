<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RMI Application in Java | Core Java Tutorial | Studytonight</title>
<meta name="keywords" content="Core java, Java tutorials, Java notes, JVM, JDK, J2SE, OOPS concepts, Inheritance, Encapsulation, Polymorphism, Abstraction, Java Constructor, Method Overiding, Interface, Exception Handling, Multi Threading, Java GUI, Java Networking, Reflection API, Reflection Classes, Java Collection API,"/> 
<meta name="description" content="Remote method invocation(RMI) allow a java object to invoke method on an object running on another machine. RMI provide remote communication between java program. RMI is used for building distributed application."/>

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
</div></div> --><div class="row">

<div class="head-bar-java">
<div class="container"><div id="subject-name">
CORE JAVA
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
<div>" Google's Android Operating System is developed on Java platform. "</div>

</div>
</div>
</div>
</div>
<!-- Common sub nav bar for all the lesson page, currently holding Google Adsense Code -->

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
<a href="rmi-in-java.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<li class="main"><a href="overview-of-java"><b>Basics of Java</b></a></li>

<li class="main"><a href="object-and-classes"><b>OOPS Concepts</b></a></li>

<li class="main"><a href="string-handling-in-java"><b>String Handling</b></a></li>

<li class="main"><a href="exception-handling"><b>Exception Handling</b></a></li>

<li class="main"><a href="multithreading-in-java"><b>Multithreading in Java</b></a></li>

<li class="main"><a href="enumerations"><b>Advanced topics</b></a></li>

<li class="main"><a href="collection-framework"><b>Collection Framework</b></a></li>

<li class="main"><a href="java-applet"><b>Java GUI</b></a></li>

<li class="main"><b>Reflection API</b></li>
<li><a href="reflection-api">Introduction to Reflection</a></li>
<li><a href="reflection-classes">Reflection classes</a></li>

<li class="main"><b>RMI Application</b></li>
<li><a href="rmi-in-java">RMI Application</a></li>

<li class="main"><b>JDBC</b></li>
<li><a href="introduction-to-jdbc">Introduction to JDBC</a></li>
<li><a href="java-sql-package">SQL Package</a></li>
<li><a href="steps-to-connect-to-database-in-java">Steps to Connect to Database</a></li>
<li><a href="connecting-to-access">Connecting to Access using Type-1 Driver</a></li>
<li><a href="connecting-to-oracle">Connecting to Oracle using Thin Driver</a></li>
<li><a href="connecting-to-mysql">Connecting to MySQL using Thin Driver</a></li>
</ul>
<hr/>
<div class="sidebar-info-box">
<div class="lessbold-title">Test Yourself !</div>
<br/><p>If you have studied all the lessons of JAVA, then evaluate yourself by taking these tests.</p>
<p><a href="tests/index.html" class="btn btn-success btn-block">Java Topical Test</a></p>
</div>
<br/>
<p style="margin-left:2px;">
<script id="mNCC" language="javascript">  medianet_width='200';  medianet_height= '200';  medianet_crid='187662268';  </script>  <script id="mNSC" src="http://contextual.media.net/nmedianet.js?cid=8CUK82SPR" language="javascript"></script>
</p>
</div>
</div><div class="span9">
<div id="body-content">
<h3>RMI</h3>
<p>Remote method invocation(RMI) allow a java object to invoke method on an object running on another machine. RMI provide remote communication between java program. RMI is used for building distributed application.</p>
<hr/>
<h4>Concept of RMI application</h4>
<p> A RMI application can be divided into two part,<b>Client</b> program and <b>Server</b> program. A <b>Server</b> program creates some remote object, make their references available for the client to invoke method on it. A <b>Client</b> program make request for remote objects on server and invoke method on them. <b>Stub</b> and <b>Skeleton</b> are two important object used for communication with remote object.</p><hr/>
<h4>Stub and Skeleton</h4>
<p><b>Stub</b> act as a gateway for Client program. It resides on Client side and communicate with <b>Skeleton</b> object. It establish the connection between remote object and transmit request to it.</p>
<p class="center"><img src="images/stub-and-skeleton.jpg" alt="RMI application"></p>
<p>Skeleton object resides on server program. It is responsible for passing request from <b>Stub</b> to remote object.</p>
<hr/>
<h4>Creating a Simple RMI application involves following steps</h4>
<ul>
<li>Define a remote interface.</li>
<li>Implementing remote interface.</li>
<li>create and start remote application</li>
<li>create and start client application</li>
</ul>
<hr/>
<h4>Define a remote interface</h4>
<p>A remote interface specifies the methods that can be invoked remotely by a client. Clients program communicate to remote interfaces, not to classes implementing it. To be a remote interface, a interface must extend the <b>Remote</b> interface of <b>java.rmi</b> package.</p>
<pre>
import java.rmi.*;
public interface AddServerInterface extends Remote
{
public int sum(int a,int b);
}
</pre>
<hr/>
<h4>Implementation of remote interface</h4>
<p>
For implementation of remote interface, a class must either extend <b>UnicastRemoteObject</b> or use exportObject() method of <b>UnicastRemoteObject</b> class. 
</p>
<pre>
import java.rmi.*;
import java.rmi.server.*;
public class Adder extends UnicastRemoteObject implements AddServerInterface
{
Adder()throws RemoteException{
super();
}
public int sum(int a,int b)
{
return a+b; 
}
}
</pre>
<hr/>
<h4>Create AddServer and host rmi service</h4>
<p>You need to create a server application and host rmi service <b>Adder</b> in it. This is done using <code>rebind()</code> method of  <b>java.rmi.Naming</b> class. <code>rebind()</code> method take two arguments, first represent the name of the object reference and second argument is reference to instance of <b>Adder</b></p>
<pre>
import java.rmi.*;
import java.rmi.registry.*;
public class AddServer{
public static void main(String args[]){
try{
AddServerInterface addService=new Adder();
Naming.rebind("AddService",addService);	
<font color="green" >//<i>addService</i> object is hosted with name <b>AddService</b>.</font> 

}catch(Exception e){System.out.println(e);}
}
}
</pre>
<hr/>
<h4>Create client application</h4>
<p>
Client application contains a java program that invokes the <code>lookup()</code> method of the <b>Naming</b> class. This method accepts one argument, the <b>rmi</b> URL and returns a reference to an object of type <b>AddServerInterface</b>. All remote method invocation is done on this object.   
</p>
<pre>
import java.rmi.*;
public class Client{
public static void main(String args[]){
try{
AddServerInterface st=(AddServerInterface)Naming.lookup("rmi://"+args[0]+"/AddService");
System.out.println(st.sum(25,8));
}catch(Exception e){System.out.println(e);}
}
}
</pre>
<hr/>
<h4>Steps to run this RMI application</h4>
<p>Save all the above java file into a directory and name it as "rmi"</p>
<ul class="content">
<li>compile all the java files</li>
<pre>javac *.java</pre>
<p class="center"><img src="images/rmi-step1.jpg" alt="run rmi application"></p>
<li>Start RMI registry</li>
<pre>start rmiregistry</pre>
<p class="center"><img src="images/rmi-step2.jpg" alt="run rmi application"></p>
<li>Run Server file</li>
<pre>java AddServer</pre>
<p class="center"><img src="images/rmi-step3.jpg" alt="run rmi application"></p>
<li>Run Client file in another command prompt abd pass local host port number at run time</li>
<pre>java Client 127.0.0.1</pre>
<p class="center"><img src="images/rmi-step4.jpg" alt="run rmi application"></p>
</ul>
<hr/>
<div><ul class="pager">
<li class="previous">
<a href="reflection-classes.php">&larr; Prev</a>
</li>
<li class="next">
<a href="introduction-to-jdbc.php">Next &rarr;</a>
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