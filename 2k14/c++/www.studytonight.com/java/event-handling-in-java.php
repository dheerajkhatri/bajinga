<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Event Handling in Java GUI | Core Java Tutorial | Studytonight</title>
<meta name="keywords" content="Core java, Java tutorials, Java notes, JVM, OOPS concepts, Inheritance, Encapsulation, Runtime Polymorphism, Abstraction, Java Constructor, Method Overiding, Interface, Exception Handling, Multi Threading, Event Handling in Java, Java GUI, Java Networking, Java Input/output, Serialization, Java Collection API."/> 
<meta name="description" content="Event describes the change of state of any object."/>



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
<a href="event-handling-in-java.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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


<li class="main"><b>Collection Framework</b></li>
<li><a href="collection-framework">Introduction to Collection</a></li>
<li><a href="collection-interfaces">Collection Interfaces</a></li>
<li><a href="collection-classes">Collection Classes</a></li>
<li><a href="iterator-in-collection">Iterator and ListIterator</a></li>
<li><a href="map-interface-in-java">Map Interface</a></li>
<li><a href="comparators-interface-in-java">Comparator Interface</a></li>
<li><a href="legacy-classes-and-interface">Legacy Classes</a></li>



<li class="main"><b>Java GUI</b></li>
<li><a href="java-applet">Applet</a></li>
<li><a href="event-handling-in-java">Event Handling</a></li>
<li><a href="java-awt">AWT</a></li>
<li><a href="java-swing">Swing</a></li>
<li><a href="java-swing-components">Swing Component</a></li>

<li class="main"><a href="reflection-api"><b>Reflection API</b></a></li>

<li class="main"><a href="rmi-in-java"><b>RMI Application</b></a></li>

<li class="main"><a href="introduction-to-jdbc"><b>JDBC</b></a></li>
</ul>
<hr/>
<div class="sidebar-info-box">
<div class="lessbold-title">Test Yourself !</div>
<br/><p>If you have studied all the lessons of JAVA, then evaluate yourself by taking these tests.</p>
<p><a href="tests/index.html" class="btn btn-success btn-block">Topical Test</a></p>
</div>
<br/>
<p style="margin-left:2px;">
<script id="mNCC" language="javascript">  medianet_width='200';  medianet_height= '200';  medianet_crid='187662268';  </script>  <script id="mNSC" src="http://contextual.media.net/nmedianet.js?cid=8CUK82SPR" language="javascript"></script>
</p>
</div>
</div><div class="span9">
<div id="body-content">
<h3>Event Handling</h3>
<p>Any program that uses GUI (graphical user interface) such as Java application written for windows, is event driven. Event describes the change of state of any object. <b>Example :</b> Pressing a button, Entering a character in Textbox. 
</p>
<hr/>
<h4>Components of Event Handling </h4>
<p>Event handling has three main components,</p>
<ul class="content">
<li><b>Events :</b> An event is a change of state of an object.</li>
<li><b>Events Source :</b> Event source is an object that generates an event.</li>
<li><b>Listeners :</b> A listener is an object that listens to the event. A listener gets notified when an event occurs.</li>
</ul>

<hr/>
<h4>How Events are handled ?</h4>
<p>
A source generates an Event and send it to one or more listeners registered with the source. Once event is received by the listener, they processe the event and then return. Events are supported by a number of Java packages, like <b>java.util</b>, <b>java.awt</b> and <b>java.awt.event</b>.
</p>
<hr/>
<h4>Important Event Classe and Interface</h4>
<table class="table table-bordered">
<tr><th>Event Classe</th><th>Description</th><th>Listener Interface</th></th>
<tr><td><b>ActionEvent</b></td><td>generated when button is pressed, menu-item is selected, list-item is double clicked</td><td>ActionListener</td></tr>
<tr><td><b>MouseEvent</b></td><td>generated when mouse is dragged, moved,clicked,pressed or released also when the enters or exit a component</td><td>MouseListener</td></tr>
<tr><td><b>KeyEvent</b></td><td>generated when input is received from keyboard</td><td>KeyListener</td></tr>
<tr><td><b>ItemEvent</b></td><td>generated when check-box or list item is clicked</td><td>ItemListener</td></tr>
<tr><td><b>TextEvent</b></td><td>generated when value of textarea or textfield is changed</td><td>TextListener</td></tr>
<tr><td><b>MouseWheelEvent</b></td><td>generated when mouse wheel is moved</td><td>MouseWheelListener</td></tr>
<tr><td><b>WindowEvent</b></td><td>generated when window is activated, deactivated,  deiconified, iconified, opened or closed</td><td>WindowListener</td></tr>
<tr><td><b>ComponentEvent</b></td><td>generated when component is hidden, moved, resized or set visible</td><td>ComponentEventListener</td></tr>
<tr><td><b>ContainerEvent</b></td><td>generated when component is added or removed from container</td><td>ContainerListener</td></tr>
<tr><td><b>AdjustmentEvent</b></td><td>generated when scroll bar is manipulated</td><td>AdjustmentListener</td></tr>
<tr><td><b>FocusEvent</b></td><td>generated when component gains or loses keyboard focus</td><td>FocusListener</td></tr>
</table>
<hr/>
<h4>Example of Event Handling</h4>
<pre>
import java.awt.*;
import java.awt.event.*;
import java.applet.*;
import java.applet.*;
import java.awt.event.*;
import java.awt.*;

public class Test extends Applet implements KeyListener
{
 String msg="";
 public void init()
 {
   addKeyListener(this);       
 }
 public void keyPressed(KeyEvent k)
 {
   showStatus("KeyPressed");
 }
 public void keyReleased(KeyEvent k)
 {
   showStatus("KeyRealesed");
 }
 public void keyTyped(KeyEvent k)
 {
   msg = msg+k.getKeyChar();
   repaint();
 }
 public void paint(Graphics g)
 {
   g.drawString(msg, 20, 40);
 }
}
</pre>
<pre>
<b>HTML code :</b>
< applet code="Test" width=300, height=100 >
</ applet>
</pre><br/>
<p class="center"><img src="images/event-handling-example.jpg" alt="event handling example" /></p>
<hr/>
<div><ul class="pager">
<li class="previous">
<a href="java-applet.php">&larr; Prev</a>
</li>
<li class="next">
<a href="java-awt.php">Next &rarr;</a>
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