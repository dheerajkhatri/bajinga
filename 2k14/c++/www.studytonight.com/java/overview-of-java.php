<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Overview of Java | Core Java Tutorial | Studytonight</title>
<meta name="keywords" content="Core java, Java tutorial, Java notes, JVM, JDK, J2SE, OOPS concepts, Inheritance, Encapsulation, Polymorphism, Abstraction, Java Constructor, Method Overiding, Interface, Exception Handling, Multi Threading, Java GUI, Java Networking, Generics, Java Input/output, Serialization,  Java Collection API,"/> 
<meta name="description" content="Core Java Tutorial to give you quick introduction to Java Language and its History."/>

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le styles -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/docs.css" rel="stylesheet">
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
<a href="overview-of-java.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<li class="main"><b>Basics of Java</b></li>
<li><a href="overview-of-java">Overview of Java</a></li>
<li><a href="features-of-java">Features of Java</a></li>
<li><a href="setting-classpath-for-java">Setting Java Enviroment</a></li>
<li><a href="component-of-java">Introduction to JVM</a></li>
<li><a href="first-java-program">My First Java Program</a></li>
<li><a href="datatypes-and-identifier">Data type and Identifier</a></li>
<li><a href="type-casting-in-java">Typecasting</a></li>
<li><a href="variable">Variable in Java</a></li>
<li><a href="array">Java Array</a></li>
<li><a href="operators-in-java">Operators in Java</a></li>


<li class="main"><b>OOPS Concepts</b></li>
<li><a href="object-and-classes.php">Objects and Classes</a></li>
<li><a href="method-and-overloaded-method.php">Method Overloading</a></li>
<li><a href="constructor-in-java.php">Constructor in Java</a></li>
<li><a href="this-keyword-in-java.php">this keyword</a></li>
<li><a href="garbage-collection.php">Garbage Collection</a></li>
<li><a href="modifier-in-java.php">Java Modifiers</a></li>
<li><a href="inheritance-in-java.php">Inheritance</a></li>
<li><a href="aggregation.php">Aggregation</a></li>
<li><a href="method-overriding-in-java.php">Method Overriding</a></li>
<li><a href="dynamic-method-dispatch.php">Runtime Polymorphism</a></li>
<li><a href="instanceof-operator.php">instanceof Operator</a></li>
<li><a href="command-line-argument.php">Command line Argument</a></li>
<li><a href="package-in-java.php">Package</a></li>
<li><a href="abstract-class.php">Abstract class</a></li>
<li><a href="java-interface.php">Interface</a></li>
<li><a href="nested-classes.php">Nested Classes</a></li>

<li class="main"><b>String Handling</b></li>
<li><a href="string-handling-in-java.php">Introduction to String</a></li>
<li><a href="string-class-functions.php">String class Fucntions</a></li>
<li><a href="stringbuffer-class.php">StringBuffer class</a></li>
<li><a href="stringbuilder-class.php">StringBuilder class</a></li>


<li class="main"><b>Exception Handling</b></li>
<li><a href="exception-handling.php">Introduction to Exceptions</a></li>
<li><a href="try-and-catch-block.php">try and catch block</a></li>
<li><a href="try-with-resource-statement.php">try with resource statement</a></li>
<li><a href="throw-throws-and-finally-keyword.php">throw, throws and finally</a></li>
<li><a href="create-your-own-exception.php">User made Exception Subclass</a></li>
<li><a href="methodoverriding-with-exception-handling.php">Method Overriding with Exception Handling</a></li>
<li><a href="chained-exception-in-java.php">Chained Exceptions</a></li>

<li class="main"><b>Multithreading in Java</b></li>
<li><a href="multithreading-in-java.php">Multithreading</a></li>
<li><a href="thread-class-and-functions.php">Thread class</a></li>
<li><a href="creating-a-thread.php">Creating a thread</a></li>
<li><a href="joining-a-thread.php">Joining a thread</a></li>
<li><a href="synchronization.php">Synchronization</a></li>
<li><a href="interthread-communication.php">Interthread Communication</a></li>


<li class="main"><b>Advanced topics</b></li>
<li><a href="enumerations.php">Enumerations</a></li>
<li><a href="autoboxing-unboxing-java.php">Autoboxing and Unboxing</a></li>
<li><a href="java-io-stream.php">Java I/O Stream</a></li>
<li><a href="serialization-and-deserialization.php">Serialization</a></li>
<li><a href="networking-in-java.php">Java Networking</a></li>
<li><a href="generic-in-java.php">Generics</a></li>


<li class="main"><b>Collection Framework</b></li>
<li><a href="collection-framework.php">Introduction to Collection</a></li>
<li><a href="collection-interfaces.php">Collection Interfaces</a></li>
<li><a href="collection-classes.php">Collection Classes</a></li>
<li><a href="iterator-in-collection.php">Iterator and ListIterator</a></li>
<li><a href="map-interface-in-java.php">Map Interface</a></li>
<li><a href="comparators-interface-in-java.php">Comparator Interface</a></li>
<li><a href="legacy-classes-and-interface.php">Legacy Classes</a></li>



<li class="main"><b>Java GUI</b></li>
<li><a href="java-applet.php">Applet</a></li>
<li><a href="event-handling-in-java.php">Event Handling</a></li>
<li><a href="java-awt.php">AWT</a></li>
<li><a href="java-swing.php">Swing</a></li>
<li><a href="java-swing-components.php">Swing Component</a></li>

<li class="main"><b>Reflection API</b></li>
<li><a href="reflection-api.php">Introduction to Reflection</a></li>
<li><a href="reflection-classes.php">Reflection classes</a></li>
<li class="main"><b>RMI Application</b></li>
<li><a href="rmi-in-java.php">RMI Application</a></li>

<li class="main"><b>JDBC</b></li>
<li><a href="introduction-to-jdbc.php">Introduction to JDBC</a></li>
<li><a href="java-sql-package.php">SQL Package</a></li>
<li><a href="steps-to-connect-to-database-in-java.php">Steps to Connect to Database</a></li>
<li><a href="connecting-to-access.php">Connecting to Access using Type-1 Driver</a></li>
<li><a href="connecting-to-oracle.php">Connecting to Oracle using Thin Driver</a></li>
<li><a href="connecting-to-mysql.php">Connecting to MySQL using Thin Driver</a></li>
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
</div>
<div class="span9">
<div id="body-content">

<h3>Overview of Java</h3>
<p>
Java is one of the world&apos;s most important and widely used computer languages, and it has held this distinction for many years. Unlike some other computer languages whose influence has weared with passage of time, while Java&apos;s has grown.
</p>
<p>As of 2015, Java is one of the most popular programming languages in use, particularly for client-server web applications, with a reported 9 million developers using and working on it.</p>

<hr/>
<h3>Creation of Java</h3>
<p>Java was developed by James Ghosling, Patrick Naughton, Mike Sheridan at Sun Microsystems Inc. in 1991. It took 18 months to develop the first working version.</p>

<p>The initial name was <b>Oak</b> but it was renamed to <b>Java</b> in 1995 as OAK was a registered trademark of another Tech company.</p>

<hr/>
<h3>Evolution of Java</h3>
<p>Java was initially launched as Java 1.0 but soon after its initial release, Java 1.1 was launched. Java 1.1 redefined event handling, new library elements were added.</p>
<p>In <b>Java 1.2</b> Swing and Collection framework was added and <code>suspend()</code>, <code>resume()</code> and <code>stop()</code> methods were deprecated from <b>Thread</b> class.</p>
<p>No major changes were made into <b>Java 1.3</b> but the next release that was <b>Java 1.4</b> contained several important changes. Keyword <code>assert</code>, chained exceptions and channel based I/O System was introduced.</p>
<p><b>Java 1.5</b> was called <b>J2SE 5</b>, it added following major new features :</p>
<ul class="content">
<li>Generics</li>
<li>Annotations</li>
<li>Autoboxing and autounboxing</li>
<li>Enumerations</li>
<li>For-each Loop</li>
<li>Varargs</li>
<li>Static Import</li>
<li>Formatted I/O</li>
<li>Concurrency utilities</li>
</ul>
<p>Next major release was <b>Java SE 7</b> which included many new changes, like :</p>
<ul class="content">
<li>Now <b>String</b> can be used to control Switch statement.</li>
<li>Multi Catch Exception</li>
<li><i>try-with-resource</i> statement</li>
<li>Binary Integer Literals</li>
<li><i>Underscore</i> in numeric literals, etc.</li>
</ul>
<p>And the latest addition to the lot is, <b>Java SE 8</b>, it was released on March 18, 2014. Some of the major new features introduced in JAVA 8 are,</p>
<ul class="content">
<li>Lambda Expressions</li>
<li>New Collection Package <code>java.util.stream</code> to provide Stream API.</li>
<li>Enhanced Security</li>
<li>Nashorn Javascript Engine included</li>
<li>Parallel Array Sorting</li>
<li>The JDBC-ODBC Bridge has been removed etc.</li>
</ul>
<hr/>
<h3>Application of Java</h3>
<p>Java is widely used in every corner of world and of human life. Java is not only used in softwares but is also widely used in designing hardware controlling software components. There are more than 930 million JRE downloads each year and 3 billion mobile phones run java.</p>
<p>Following are some other usage of Java :</p>
<ol class="content"><li>Developing Desktop Applications</li>
<li>Web Applications like Linkedin.com, Snapdeal.com etc</li>
<li>Mobile Operating System like Android</li>
<li>Embedded Systems</li>
<li>Robotics and games etc.</li>
</ol>
<hr/>
<h4>Download JDK</h4>
<p>For running Java programs in your system you will have to download and install <a href="http://www.oracle.com/technetwork/java/javase/downloads/index.html" target="_blank" title="Download JDK Kit"><b>JDK kit from here</b></a> (current version is jdk 1.8).<p>
<hr/>
<div><ul class="pager">
  <li class="next">
    <a href="features-of-java.php">Next &rarr;</a>
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