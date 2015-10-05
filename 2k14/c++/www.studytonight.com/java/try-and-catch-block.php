<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>try and Catch in Exception Handling | Core Java Tutorial | Studytonight</title>

<meta name="keywords" content="Core java, Java tutorials, Java notes, JVM, Java Array, J2SE, Inheritance, Aggregation, Composition, Polymorphism, Abstraction, Interface, Exception Handling, chained exception, throws and throw, Multi Threading, Java GUI, Java Networking, Generics, Java Input/output, Serialization, Java Collection API"/> 
<meta name="description" content="Try is used to guard a block of code in which exception may occur. This block of code is called guarded region. A catch statement involves declaring the type of exception you are trying to catch."/>
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
<a href="try-and-catch-block.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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


<li class="main"><b>Exception Handling</b></li>
<li><a href="exception-handling">Introduction to Exceptions</a></li>
<li><a href="try-and-catch-block">try and catch block</a></li>
<li><a href="try-with-resource-statement">try with resource statement</a></li>
<li><a href="throw-throws-and-finally-keyword">throw, throws and finally</a></li>
<li><a href="create-your-own-exception">User made Exception Subclass</a></li>
<li><a href="methodoverriding-with-exception-handling">Method Overriding with Exception Handling</a></li>
<li><a href="chained-exception-in-java">Chained Exceptions</a></li>

<li class="main"><b>Multithreading in Java</b></li>
<li><a href="multithreading-in-java">Multithreading</a></li>
<li><a href="thread-class-and-functions">Thread class</a></li>
<li><a href="creating-a-thread">Creating a thread</a></li>
<li><a href="joining-a-thread">Joining a thread</a></li>
<li><a href="synchronization">Synchronization</a></li>
<li><a href="interthread-communication">Interthread Communication</a></li>


<li class="main"><b>Advanced topics</b></li>
<li><a href="enumerations">Enumerations</a></li>
<li><a href="autoboxing-unboxing-java">Autoboxing and Unboxing</a></li>
<li><a href="java-io-stream">Java I/O Stream</a></li>
<li><a href="serialization-and-deserialization">Serialization</a></li>
<li><a href="networking-in-java">Java Networking</a></li>
<li><a href="generic-in-java">Generics</a></li>


<li class="main"><a href="collection-framework"><b>Collection Framework</b></a></li>

<li class="main"><a href="java-applet"><b>Java GUI</b></a></li>

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
<h3>Exception Handling Mechanism</h3>
<p>In java, exception handling is done using five keywords,</p>
<ol class="content">
<li><b>try</b></li>
<li><b>catch</b></li>
<li><b>throw</b></li>
<li><b>throws</b></li>
<li><b>finally</b></li>
</ol>
<p>Exception handling is done by transferring the execution of a program to an appropriate exception handler when exception occurs.</p>
<hr/>
<h4>Using try and catch</h4>
<p>Try is used to guard a block of code in which exception may occur. This block of code is called guarded region. A catch statement involves declaring the type of exception you are trying to catch. If an exception occurs in guarded code, the catch block that follows the try is checked, if the type of exception that occured is listed in the catch block then the exception is handed over to the catch block which then handles it. 
</p>
<hr/>
<h4>Example using Try and catch</h4>
<p><pre>
class Excp
{
 public static void main(String args[])
 {
  int a,b,c;
  try
  {
   a=0;
   b=10;
   c=b/a;
   System.out.println("This line will not be executed");
  }
  catch(ArithmeticException e)
  {
   System.out.println("Divided by zero"); 
  }
  System.out.println("After exception is handled");
 }
}
<b>output:</b>
Divided by zero
After exception is handled
</pre>
An exception will thrown by this program as we are trying to divide a number by zero inside <b>try</b> block. The program control is transfered outside <b>try</b> block. Thus the line "<i>This line will not be executed</i>" is never parsed by the compiler. The exception thrown is handle in <b>catch</b> block. Once the exception is handled the program controls continue with the next line in the program. Thus the line "<i>After exception is handled</i>" is printed.   
</p>
<hr/>
<h4>Multiple catch blocks:</h4>
<p>A try block can be followed by multiple catch blocks. You can have any number of catch blocks after a single try block.If an exception occurs in the guarded code the exception is passed to the first catch block in the list. If the exception type of exception, matches with the first catch block it gets caught, if not the exception is passed down to the next catch block. This continue until the exception is caught or falls through all catches.</p>
<hr/>
<h4>Example for Multiple Catch blocks</h4>

<pre>
class Excep
{
 public static void main(String[] args)
 {
  try
  {
   int arr[]={1,2};
   arr[2]=3/0;
  } 
  catch(ArithmeticException ae)
  {
   System.out.println("divide by zero");
  }
  catch(ArrayIndexOutOfBoundsException e)
  {
   System.out.println("array index out of bound exception");
  }
 }
}
<b>Output:</b>
divide by zero
</pre>
<hr/>

<h4>Example for Unreachable Catch block</h4>
<p>While using multiple <b>catch</b> statements, it is important to remember that exception sub classes inside <b>catch</b> must come before any of their super classes otherwise it will lead to compile time error.</p>
<pre>
class Excep
{
 public static void main(String[] args)
 {
  try
  {
   int arr[]={1,2};
   arr[2]=3/0;
  }
  catch(Exception e)    //<font color="red">This block handles all Exception</font>
  {
   System.out.println("Generic exception");
  }
  catch(ArrayIndexOutOfBoundsException e)    //<font color="green">This block is unreachable</font>
  {
   System.out.println("array index out of bound exception");
  }
 }
}
</pre>
</p>
<hr/>
<h4>Nested try statement</h4>
<p>
<b>try</b> statement can be <b>nested</b> inside another block of <b>try</b>. Nested try block is used when a part of a block may cause one error while entire block may cause another error. In case if inner <b>try</b> block does not have a <b>catch</b> handler for a particular exception then the outer <b>try</b> is checked for match.   
</p>

<pre>
class Excep
{
 public static void main(String[] args)
 {
  try
  {
   int arr[]={5,0,1,2};
   try
   {
    int x=arr[3]/arr[1];
   }
   catch(ArithmeticException ae)
   {
    System.out.println("divide by zero");
   }
   arr[4]=3;
  }
  catch(ArrayIndexOutOfBoundsException e)
  {
   System.out.println("array index out of bound exception");
  }
 }
}
</pre>
<hr/>
<h4>Important points to Remember</h4>
<ol class="content">
<li>If you do not explicitly use the try catch blocks in your program, java will provide a default exception handler, which will print the exception details on the terminal, whenever exception occurs.</li>
<li>Super class <b>Throwable</b> overrides <b>toString()</b> function, to display error message in form of string.</li>
<li>While using multiple catch block, always make sure that exception subclasses comes before any of their super classes. Else you will get compile time error.</li>
<li>In nested try catch, the inner try block, uses its own catch block as well as catch block of the outer try, if required.</li>
<li>Only the object of Throwable class or its subclasses can be thrown.</li>
</ol>
<hr/>
<div><ul class="pager">
<li class="previous">
<a href="exception-handling.php">&larr; Prev</a>
</li>
<li class="next">
<a href="try-with-resource-statement.php">Next &rarr;</a>
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