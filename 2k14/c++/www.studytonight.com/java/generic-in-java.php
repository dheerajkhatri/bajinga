<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Concept of Generics in Core Java | Core Java Tutorial | Studytonight</title>
<meta name="keywords" content="Core java, Java tutorials, Java notes, JVM, JDK, J2SE, OOPS concepts, Inheritance, Encapsulation, Polymorphism, Abstraction, Java Constructor, Method Overiding, Interface, Exception Handling, Multi Threading, Java GUI, Java Networking, Generics, Java Input/output, Serialization,  Java Collection API,"/> 
<meta name="description" content="A class or interface that operates on parameterized type is called <b>Generic</b>. Generics was first introduced in Java5. Now it is one of the most profound feature of java programming language."/>

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
<a href="generic-in-java.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<h3>Generics</h3>
<p>
A class or interface that operates on parameterized type is called <b>Generic</b>. Generics was first introduced in Java5. Now it is one of the most profound feature of java programming language. It provides facility to write algorithm independent of any specific type of data. Generics also provide type safety.</p> 
<p>Using <b>Generics</b>, it becomes possible to create a single class or method that automatically works with all types of data(Integer, String, Float etc). It expanded the ability to reuse code safely and easily.
</p>

<hr/>
<h4>Example of Generic class</h4>
<pre>
class Gen<T>
{
 <b>T</b> ob;     <font color="green">//an object of type T is declared</font>
 Gen(T o)  <font color="green">//constructor</font>
 {
  ob = o;
 }
 public <b>T</b> getOb()
 {
  return ob;
 }
}

class Test
{
 public static void main (String[] args)
 {
  Gen <b>< Integer></b> iob = new Gen<Integer>(100);     <font color="green">//instance of Integer type Gen Class.</font> 
  int  x = iob.getOb();
  System.out.print in(x);
  Gen <b>< String></b> sob = new Gen<String>("Hello");  <font color="green">//instance of String type Gen Class.</font>
  String str = sob.getOb();
 }
}
</pre>
<pre>
<b>Output :</b> 
100
Hello
</pre>
<hr/>
<h4>Generics Work Only with Objects</h4>
<p>You cannot use primitive datatype such as <b>int</b> or <b>char</b> etc with Generics type. It should always be an object.</p>
<pre>
Gen<b>< int></b> iOb = new Gen<b>< int></b>(07);    <font color="red">//Error, can't use primitive type</font>
</pre>
<hr/>
<h4>Generics Types of different Type Arguments are never same</h4>
<p>Reference of one generic type is never compatible with other generic type unless their type argument is same. In the example above we created two objects of class <b>Gen</b>, one of type <b>Integer</b>, and other of type <b>String</b>, hence,</p>
<pre>
iob = sob;    <font color="red">//Absolutely Wrong</font>
</pre>
<hr/>
<h4>Generic Methods</h4>
<p>You can also create generic methods that can be called with different types of arguments based on the type of arguments passed to generic method, the compiler handles each method.</p>
<hr/>
<h4>Example of Generic method</h4>
<pre>
class GenTest
{
 static <b>< V, T></b> void display (V v, T t)
 {
  System.out.println(v.getClass().getName()+" = " +v);
  System.out.println(t.getClass().getName()+" = " +t);
 }
 public static void main(String[] args)
 {
  display(88,"This is string");
 }
}
</pre>
<pre>
<b>Output :</b> 
java lang.Integer = 88
Java lang.String = this is string 
</pre>

<hr/>
<h4>Generic Constructors</h4>
<p>It is possible to create a generic constructor even if the class is not generic.</p>

<h4>Example of Generic Constructor</h4>
<pre>
class Gen
{
 private double val;
 <b>< T extends Number></b> Gen(T ob)
 {
  val=ob.doubleValue();
 }
 void show()
 {
  System.out.println(val);
 }
}

class Test
{
 public static void main(String[] args)
 {
  Gen g = new Gen(100); 
  Gen g1 = new Gen(121.5f);
  g.show();
  g1.show(); 
 }
}
</pre>
<pre>
<b>Output :</b> 
100.0
121.5 
</pre>
<hr/>
<h4>Generic Interface</h4>
<p>Like classes and methods, you can also create generic interfaces.</p>
<pre>
interface MyInterface<b>< T ></b>
{ .. }
</pre>

<hr/>
<h4>Generic Bounded type Parameter</h4>
<p>
You can also set restriction on the type that will be allowed to pass to a type-parameter. This is done with the help of <b>extends</b> keyword when specifying the type parameter.</p>
<pre> < T extends Number ></pre>
<p>
Here we have taken <b>Number</b> class, it can be any wrapper class name. This specifies that T can be only be replaced by <b>Number</b> class data itself or any of its subclass.
</p>
<hr/>
<h4>Generic Method with bounded type Parameters.</h4>
<pre>
class Gen
{
 static <b>< T, V extends number></b> void display(T t, V v)  
 {
  System.out.println(v.getClass().getName()+" = " +v);
  System.out.println(t.getClass().getName()+" = " +t);
 }
 public static void main(String[] args)
 {
 // display(88,"This is string");
  display ("this is string",99); 
 }
}
</pre>
<pre>	
<b>Output :</b> 
  java.lang.String = This is string 
  java.lang.Double = 99.O

</pre>
<ul class="content">
<li>Type V is bounded to Number type and its subclass only.</li>
<li>If <code>display(88,"This is string")</code> is uncommented, it will give an error of type incompatibility, as String is not a subclass of Number class.</li>
</ul>
<hr/>

<div><ul class="pager">
<li class="previous">
<a href="networking-in-java.php">&larr; Prev</a>
</li>
<li class="next">
<a href="collection-framework.php">Next &rarr;</a>
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