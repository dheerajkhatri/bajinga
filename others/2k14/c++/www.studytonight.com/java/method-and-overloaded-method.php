<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Methods and Method overloading in Java | Core Java Tutorial | Studytonight</title>
<meta name="keywords" content="Core java, Java tutorials, Java notes, JVM, Java Array, J2SE, Inheritance, Aggregation, Method, Method Overloading, Method Overriding Exception Handling, Multi Threading, Java GUI, Java Networking, Generics, Java Input/output, Serialization, ArrayList, HashMap, HashTable, Java Collection API"/> 
<meta name="description" content="Method overloading is one of the ways through which java supports polymorphism. Method overloading can be done by changing number of arguments or by changing the data type of arguments."/>

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
<a href="method-and-overloaded-method.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<h3>Methods in Java</h3>

<p>Method describe behavior of an object. A method is a collection of statements that are group together to perform an operation. 
</p>
<p><b>Syntax :</b>
<pre>
return-type methodName(parameter-list)
{
 //body of method
}
</pre></p>
<hr/>
<h4>Example of a Method</h4>
<p><pre>
public String getName(String st)
{
 String name="StudyTonight";
 name=name+st;
 return name;
}
</pre></p>
<p class="center"><img src="images/method-defination.jpg" alt="method definition in java"/></p>
<p><b>Modifier :</b> Modifier are access type of method. We will discuss it in detail later.</p>
<p><b>Return Type :</b> A method may return value. Data type of value return by a method is declare in method heading.</p>
<p><b>Method name :</b> Actual name of the method.</p> 
<p><b>Parameter :</b> Value passed to a method.</p> 
<p><b>Method body :</b> collection of statement that defines what method does.</p> 
<hr/>
<h4>Parameter Vs. Argument</h4>
<p>
While talking about method, it is important to know the difference between two terms <b>parameter</b> and <b>argument</b>. 
</p>
<p>
<b>Parameter</b> is variable defined by a method that receives value when the method is called. Parameter are always local to the method they dont have scope outside the method. While <b>argument</b> is a value that is passed to a method when it is called.  
</p>
<p class="center"><img src="images/parameter-vs-argument.jpg" alt="parameter and argument" /></p>
<hr/>
<h4><code>call-by-value</code> and <code>call-by-reference</code></h4>
<p>
There are two ways to pass an argument to a method
</p>
<ol class="content">
<li><b>call-by-value :</b> In this approach copy of an argument value is pass to a method. Changes made to the argument value inside the method will have no effect on the arguments.</li>
<li><b>call-by-reference :</b> In this reference of an argument is pass to a method. Any changes made inside the method will affect the agrument value.</li>
</ol>
<p>
<b>NOTE :</b> In Java, when you pass a primitive type to a method it is passed by value whereas when you pass an object of any type to a method it is passed as reference.
</p>
<hr/>
<h4>Example of <code>call-by-value</code></h4>
<pre>
public class Test
{
    public void callByValue(int x)
    {
        x=100;
    }
    public static void main(String[] args)
    {
       int x=50;
        Test t = new Test();
        t.callByValue(x);	<font color="green">//function call</font>
        System.out.println(x);
    }
    
}
</pre>
<p> <code>Output : 50 </code></p>
<hr/>
<h4>Example of <code>call-by-reference</code></h4>
<pre>
public class Test
{
    int x=10;
    int	y=20;
    public void callByReference(Test t)
    {
        t.x=100;
        t.y=50;
    }
    public static void main(String[] args)
    {
       
        Test ts = new Test();
        System.out.println("Before "+ts.x+" "+ts.y);
        ts.callByReference(ts);
        System.out.println("After "+ts.x+" "+ts.y);
    }
    
}
</pre>
<p><b>Output :</b></p>
<pre>
Before 10 20
After 100 50
</pre>
<hr/>
<h3>Method overloading</h3>
<p>If two or more method in a class have same name but different parameters, it is known as method overloading.</p>
<p>Method overloading is one of the ways through which java supports polymorphism. Method overloading can be done by changing number of arguments or by changing the data type of arguments. If two or more method have same name and same parameter list <b>but differs in return type are not</b> said to be overloaded method</p>
<hr/>
<h4>Different ways of Method overloading</h4>
<p>There are two different ways of method overloading</p>

<h4>Method overloading by changing data type of Arguments</h4>
<p><i>Example :</i></p>
<pre>
class Calculate
{
 void sum (int a, int b)
 {
  System.out.println("sum is"+(a+b)) ;
 }
 void sum (float a, float b)
 {
  System.out.println("sum is"+(a+b));
 }
 Public static void main (String[] args)
 {
  Calculate  cal = new Calculate();
  cal.sum (8,5);      <b>//sum(int a, int b) is method is called</b>. 
  cal.sum (4.6, 3.8); <b>//sum(float a, float b) is called</b>.
 }
}</pre>
<p><b>Output:</b></p>
<pre>
Sum is 13
Sum is 8.4
</pre>
<p>You can see that sum() method is overloaded two times. The first takes two integer arguments, the second takes two float arguments. 
</p>
<hr/>
<h4>Method overloading by changing no. of argument.</h4>
<p><i>Example</i> :</p>
<pre>
class Area
{
 void find(int l, int b)
 {
  System.out.println("Area is"+(l*b)) ;
 }
 void find(int l, int b,int h)
 {
  System.out.println("Area is"+(l*b*h));
 }
 public static void main (String[] args)
 {
  Area  ar = new Area();
  ar.find(8,5);     <b>//find(int l, int b) is method is called</b>. 
  ar.find(4,6,2);    <b>//find(int l, int b,int h) is called</b>.
 }
}</pre>
<p><b>Output:</b></p>
<pre>
Area is 40
Area is 48
</pre>
<p>In this example the find() method is overloaded twice. The first takes two arguments to calculate area, and the second takes three arguments to calculate area. 
</p>

<p>When an overloaded method is called java look for match between the arguments to call the method and the method's parameters. This match need not always be exact, sometime when exact match is not found, Java automatic type conversion plays a vital role.</p><hr/>

<h4>Example of Method overloading with type promotion.</h4>
<pre>
class Area
{
 void find(long l,long b)
 {
  System.out.println("Area is"+(l*b)) ;
 }
 void find(int l, int b,int h)
 {
  System.out.println("Area is"+(l*b*h));
 }
 public static void main (String[] args)
 {
  Area  ar = new Area();
  ar.find(8,5);     <b>//automatic type conversion from find(int,int) to find(long,long) </b>. 
  ar.find(2,4,6)    <b>//find(int l, int b,int h) is called</b>.
 }
}</pre>
<p><b>Output:</b></p>
<pre>
Area is 40
Area is 48
</pre>
<hr/>
<div><ul class="pager">
<li class="previous">
<a href="object-and-classes.php">&larr; Prev</a>
</li>
<li class="next">
<a href="constructor-in-java.php">Next &rarr;</a>
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