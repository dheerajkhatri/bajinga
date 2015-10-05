<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Introduction to Strings in Java | Core Java Tutorial | Studytonight</title>
<meta name="keywords" content="Core java, Java tutorials, Java notes, JVM, JDK, J2SE, OOPS concepts, Inheritance, Encapsulation, Polymorphism, Abstraction, String Handling, String Buffer, String Buider, Interface, Exception Handling, Multi Threading, Java Input/output, Serialization,  Java Collection API"/>
<meta name="description" content="String is probably the most commonly used class in java library. String class is encapsulated under java.lang package"/>

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
<a href="string-handling-in-java.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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


<li class="main"><b>OOPS Concepts</b></li>
<li><a href="object-and-classes">Objects and Classes</a></li>
<li><a href="method-and-overloaded-method">Method Overloading</a></li>
<li><a href="constructor-in-java">Constructor in Java</a></li>
<li><a href="this-keyword-in-java">this keyword</a></li>
<li><a href="garbage-collection">Garbage Collection</a></li>
<li><a href="modifier-in-java">Java Modifiers</a></li>
<li><a href="inheritance-in-java">Inheritance</a></li>
<li><a href="aggregation">Aggregation</a></li>
<li><a href="method-overriding-in-java">Method Overriding</a></li>
<li><a href="dynamic-method-dispatch">Runtime Polymorphism</a></li>
<li><a href="instanceof-operator">instanceof Operator</a></li>
<li><a href="command-line-argument">Command line Argument</a></li>
<li><a href="package-in-java">Package</a></li>
<li><a href="abstract-class">Abstract class</a></li>
<li><a href="java-interface">Interface</a></li>
<li><a href="nested-classes">Nested Classes</a></li>

<li class="main"><b>String Handling</b></li>
<li><a href="string-handling-in-java">Introduction to String</a></li>
<li><a href="string-class-functions">String class Fucntions</a></li>
<li><a href="stringbuffer-class">StringBuffer class</a></li>
<li><a href="stringbuilder-class">StringBuilder class</a></li>

<li class="main"><a href="exception-handling"><b>Exception Handling</b></a></li>

<li class="main"><a href="multithreading-in-java"><b>Multithreading in Java</b></a></li>

<li class="main"><a href="enumerations"><b>Advanced topics</b></a></li>

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
<h3>Introduction to String Handling</h3>
<p>String is probably the most commonly used class in java library. String class is encapsulated under <code>java.lang</code> package. In java, every string that you create is actually an object of type <b>String</b>. One important thing to notice about string object is that string objects are immutable that means once a string object is created it cannot be altered.</p>
<hr/>
<h4>What is an Immutable object?</h4>
<p>An object whose state cannot be changed after it is created is known as an Immutable object. String, Integer, Byte, Short, Float, Double and all other wrapper class's objects are immutable.</p>
<hr/>
<h4>Creating an Immutable class</h4>
<p>
<pre>
public final class MyString
{
 final String str;
 MyString(String s)
 {
  this.str = s;
 }
 public String get()
 {
  return str;
 }
}
</pre>
In this example <b>MyString</b> is an immutable class. <b>MyString</b>'s state cannot be changed once it is created.  
</p>
<hr/>
<h4>Creating a String object</h4>
<p>String can be created in number of ways, here are a few ways of creating string object.</p>
<h4>1) Using a String literal</h4>
<p>String literal is a simple string enclosed in double quotes <code>" "</code>. A string literal is treated as a String object.</p>
<pre>
String str1 = "Hello";
</pre><br/>
<h4>2) Using another String object</h4>
<pre>String str2 = new String(str1);</pre>
<br/>
<h4>3) Using new Keyword</h4>
<pre>
String str3 = new String("Java");
</pre><br/>
<h4>4) Using + operator (Concatenation)</h4>
<pre>String str4 = str1 + str2;
or,
String str5 = "hello"+"Java";
</pre>
<br/>
<p>Each time you create a String literal, the JVM checks the string pool first. If the string literal already exists in the pool, a reference to the pool instance is returned. If string does not exist in the pool, a new string object is created, and is placed in the pool. String objects are stored in a special memory area known as <b>string constant pool</b> inside the heap memory.</p>
<hr/>
<h4>String object and How they are stored</h4>
<p>When we create a new string object using string literal, that string literal is added to the string pool, if it is not present there already.</p>
<p><pre>String str= "Hello";</pre></p>
<p><img src="images/java-string1.jpg" alt="Creating String in heap" /></p><hr/>
<p>And, when we create another object with same string, then a reference of the string literal already present in string pool is returned.</p>
<p><pre>String str2=str;</pre></p>
<p><img src="images/java-string2.jpg" alt="Creating String in heap" /></p><hr/>

<p>But if we change the new string, its reference gets modified.</p>
<p><pre>str2=str2.concat("world");</pre></p>
<p><img src="images/java-string3.jpg" alt="Creating String in heap" /></p>

<hr/>
<h4>Concatenating String</h4>
<p>There are 2 methods to concatenate two or more string. </p>
<ol class="content">
<li>Using <b>concat()</b> method</li>
<li>Using <code>+</code> operator</li>
</ol><br/>
<h4>1) Using concat() method</h4>
<pre>
string s = "Hello";
string str = "Java";
string str2 = s.concat(str);
String str1 = "Hello".concat("Java");    <font color="green">//works with string literals too.</font>
</pre><br/>
<h4>2) Using + operator </h4>
<pre>
string str = "Rahul"; 
string str1 = "Dravid";
string str2 = str + str1;
string st = "Rahul"+"Dravid";
</pre>
<hr/>
<h4>String Comparison</h4>
<p>String comparison can be done in 3 ways.</p>
<ol class="content">
<li>Using <b>equals()</b> method</li>
<li>Using <code>==</code> operator</li>
<li>By <b>CompareTo()</b> method</li>
</ol>
<br/>
<h4>Using equals() method</h4>
<p>equals() method compares two strings for equality. Its general syntax is,</p>
<pre>
<i>boolean</i> <b>equals</b> (Object <i>str</i>)
</pre>
<p>It compares the content of the strings. It will return <b>true</b> if string matches, else returns <b>false</b>.</p> 
<pre>
String s = "Hell";
String s1 = "Hello";
String s2 = "Hello";
s1.equals(s2);    <font color="green">//true</font>
s.equals(s1) ;   <font color="red">//false</font>
</pre><br/>

<h4>Using == operator</h4>
<p><code>==</code> operator compares two object references to check whether they refer to same instance. This also, will return <b>true</b> on successful match.</p>
<pre>
String s1 = "Java";
String s2 = "Java";
String s3 = new string ("Java");
test(Sl == s2)     <font color="green">//true</font>
test(s1 == s3)      <font color="red">//false</font>
</pre><br/>

<h4>By compareTo() method</h4>
<p>compareTo() method compares values and returns an int which tells if the string compared is less than, equal to or greater than th other string. Its general syntax is,</p> 
<pre>
<i>int</i> <b>compareTo</b>(String <i>str</i>)
</pre>
<p>To use this function you must implement the <b>Comparable Interface</b>. compareTo() is the only function in Comparable Interface.
<pre>
String s1 = "Abhi";
String s2 = "Viraaj";
String s3 = "Abhi";
s1.compareTo(S2);     <font color="green">//return -1 because s1 < s2 </font>
s1.compareTo(S3);     <font color="red">//return 0 because s1 == s3 </font>
s2.compareTo(s1);     <font color="blue">//return 1 because s2 > s1</font>
</pre>
</p>

<hr/>
<div><ul class="pager">
<li class="previous">
<a href="nested-classes.php">&larr; Prev</a>
</li>
<li class="next">
<a href="string-class-functions.php">Next &rarr;</a>
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