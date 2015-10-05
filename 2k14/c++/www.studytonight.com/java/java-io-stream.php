<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Input/Output Streams in Core Java | Core Java Tutorial | Studytonight</title>
<meta name="keywords" content="Core java, Java tutorials, Java notes, JVM, JDK, J2SE, OOPS concepts, Inheritance, Encapsulation, Polymorphism, Abstraction, Java Constructor, Method Overiding, Interface, Exception Handling, Multi Threading, Java Input/output, Serialization,  Java Collection API,"/>
 
<meta name="description" content="Java performs I/O through Streams. A Stream is linked to a physical layer by java I/O system to make input and output operation in java."/>

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
<a href="java-io-stream.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<h3>IO Stream</h3>
<p>Java performs I/O through <b>Streams</b>. A Stream is linked to a physical layer by java I/O system to make input and output operation in java. In general, a stream means continuous flow of data. Streams are clean way to deal with input/output without having every part of your code understand the physical. </p>
<p> Java encapsulates Stream under <b>java.io</b> package. Java defines two types of streams. They are,</p>
<ol class="content">
<li><b>Byte Stream :</b> It provides a convenient means for handling input and output of byte.</li>
<li><b>Character Stream :</b> It provides a convenient means for handling input and output of characters. Character stream uses Unicode and therefore can be internationalized.</li>
</ol>
</p>
<hr/>
<h4>Byte Stream Classes</h4>
<p>Byte stream is defined by using two abstract class at the top of hierarchy, they are InputStream and OutputStream.</p>
<p class="center"><img src="images/byte-stream.jpg" alt="byte stream classification"/>
</p>
<p>These two abstract classes have several concrete classes that handle various devices such as disk files, network connection etc.</p>
<hr/>
<h4>Some important Byte stream classes.</h4>
<p>
<table class="table table-bordered table-striped">
<tr><th>Stream class</th><th>Description</th></tr>
<tr><td><b>BufferedInputStream</b></td><td>Used for Buffered Input Stream.</td></tr>
<tr><td><b>BufferedOutputStream</b></td><td>Used for Buffered Output Stream.</td></tr>
<tr><td><b>DataInputStream</b></td><td>Contains method for reading java standard datatype</td></tr>
<tr><td><b>DataOutputStream</b></td><td>An output stream that contain method for writing java standard data type</td></tr>
<tr><td><b>FileInputStream</b></td><td>Input stream that reads from a file</td></tr>
<tr><td><b>FileOutputStream</b></td><td>Output stream that write to a file.</td></tr>
<tr><td><b>InputStream</b></td><td>Abstract class that describe stream input.</td></tr>
<tr><td><b>OutputStream</b></td><td>Abstract class that describe stream output.</td></tr>
<tr><td><b>PrintStream</b></td><td>Output Stream that contain <code>print()</code> and <code>println()</code> method</td></tr>
</table>
</p>
<p>
These classes define several key methods. Two most important are 
<ol class="content">
<li><code>read()</code> : reads byte of data.</li>
<li><code>write()</code> : Writes byte of data.</li>
</ol>
</p>
<hr/>
<h4>Character Stream Classes</h4>
<p>Character stream is also defined by using two abstract class at the top of hierarchy, they are Reader and Writer.</p>
<p class="center"><img src="images/character-stream.jpg" alt="character stream classification"/>
</p>
<p>These two abstract classes have several concrete classes that handle unicode character.</p>
<hr/>
<h4>Some important Charcter stream classes.</h4>
<p>
<table class="table table-bordered table-striped">
<tr><th>Stream class</th><th>Description</th></tr>
<tr><td><b>BufferedReader</b></td><td>Handles buffered input stream.</td></tr>
<tr><td><b>BufferedWriter</b></td><td>Handles buffered output stream.</td></tr>
<tr><td><b>FileReader</b></td><td>Input stream that reads from file.</td></tr>
<tr><td><b>FileWriter</b></td><td>Output  stream that writes to file.</td></tr>
<tr><td><b>InputStreamReader</b></td><td>Input stream that translate byte to character</td></tr>
<tr><td><b>OutputStreamReader</b></td><td>Output stream that translate character to byte.</td></tr>
<tr><td><b>PrintWriter</b></td><td>Output Stream that contain <code>print()</code> and <code>println()</code> method.</td></tr>
<tr><td><b>Reader</b></td><td>Abstract class that define character stream input</td></tr>
<tr><td><b>Writer</b></td><td>Abstract class that define character stream output</td></tr>
</table>
</p>
<hr/>
<h4>Reading Console Input</h4>
<p>We use the object of BufferedReader class to take inputs from the keyboard.</p>
<p class="center"><img src="images/bufferedreader-class-explanation.gif" alt="BufferedReader class explanation"/></p><br/>
<h4>Reading Characters</h4>
<p><code>read()</code> method is used with BufferedReader object to read characters. As this function returns integer type value has we need to use typecasting to convert it into <b>char</b> type.</p>
<pre>
<i>int</i> <b>read()</b> throws <b>IOException</b>
</pre>
<p>Below is a simple example explaining character input.</p>
<pre>
class CharRead
{
 public static void main( String args[])
 {
  BufferedReader br = new Bufferedreader(new InputstreamReader(System.in));
  char c = <b>(char)br.read()</b>;       <font color="green">//Reading character </font> 
 }
}
</pre>
<br/>
<h4>Reading Strings</h4>
<p>To read string we have to use <code>readLine()</code> function with BufferedReader class's object.</p>
<pre>
<i>String</i> <b>readLine()</b> throws <b>IOException</b>
</pre>

<hr/>
<h4>Program to take String input from Keyboard in Java</h4>
<pre>
import java.io.*;
class MyInput
{
 public static void main(String[] args)
 {
  String text;
  <b>InputStreamReader</b> isr = new <b>InputStreamReader(System.in)</b>;
  <b>BufferedReader</b> br = new <b>BufferedReader(isr)</b>;
  text = br.readLine();          <font color="green">//Reading String </font> 
  System.out.println(text);
 }
}
</pre>

<hr/>
<h4>Program to read from a file using BufferedReader class</h4>
<pre>
import java. Io *;
class ReadTest
{
 public static void main(String[] args)
 {
  try 
  {
   File fl = new File("d:/myfile.txt");
   BufferedReader br = new BufferedReader(new FileReader(fl)) ;
   String str;
   while ((str=br.readLine())!=null)
   {
    System.out.println(str);
   }
   br.close();
   fl.close();
  }
  catch (IOException  e)
  { e.printStackTrace(); }
 }
}
</pre>
<hr/>
<h4>Program to write to a File using FileWriter class</h4>
<pre>
import java. Io *;
class WriteTest
{
 public static void main(String[] args)
 {
  try 
  {
   File fl = new File("d:/myfile.txt");
   String str="Write this string to my file";
   FileWriter fw = new FileWriter(fl) ;
   fw.write(str);
   fw.close();
   fl.close();
  }
  catch (IOException  e)
  { e.printStackTrace(); }
 }
}
</pre>
<hr/>
<div><ul class="pager">
<li class="previous">
<a href="autoboxing-unboxing-java.php">&larr; Prev</a>
</li>
<li class="next">
<a href="serialization-and-deserialization.php">Next &rarr;</a>
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