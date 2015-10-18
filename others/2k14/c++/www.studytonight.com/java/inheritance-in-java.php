<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inheritance in Java | Core Java Tutorial | Studytonight</title>
<meta name="keywords" content="Core java, Java tutorials, Java notes, JVM, OOPS concepts, Inheritance, Association, Encapsulation, Polymorphism, Abstraction, Java Constructor, Method Overiding, Interface, Exception Handling, Multi Threading, Java GUI, Java Networking, Generics, Java Input/output, Serialization,  Java Collection API,"/> 
<meta name="description" content="Inheritance is one of the key features of Object Oriented Programming. Inheritance provided mechanism that allowed a class to inherit property of another class."/>


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
<a href="inheritance-in-java.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<h3>Inheritance (IS-A)</h3>
<p>Inheritance is one of the key features of Object Oriented Programming. Inheritance provided mechanism that allowed <b>a class to inherit property of another class</b>. When a Class extends another class it inherits all non-private members including fields and methods. Inheritance in Java can be best understood in terms of Parent and Child relationship, also known as <b>Super class</b>(Parent) and <b>Sub class</b>(child) in Java language.</p>
<p>Inheritance defines <b>is-a</b> relationship between a Super class and its Sub class. <code>extends</code> and <code>implements</code> keywords are used to describe inheritance in Java.</p>
<p class="center"><img src="images/inheritance-in-java.jpg" alt="Inheritance in Java"/></p>

<p>Let us see how <b>extend</b> keyword is used to achieve Inheritance.</p>
<pre>
class <b>Vehicle</b>. 
{
  ......  
}
class <b>Car</b> extends <b>Vehicle</b> 
{
 .......   <b>//extends the property of vehicle class.</b>
}
</pre>
<p>Now based on above example. In OOPs term we can say that, </p>
<ul class="content">
<li><b>Vehicle</b> is super class of <b>Car</b>.</li> 
<li><b>Car</b> is sub class of <b>Vehicle</b>.</li>
<li>Car IS-A Vehicle.</li>
</ul>
<hr/>
<h4>Purpose of Inheritance</h4>
<ol class="content">
<li>To promote code reuse.</li>
<li>To use Polymorphism.</li>
</ol>
<hr/>
<h4>Simple example of Inheritance</h4>
<pre>
class <b>Parent</b>
{
    public void p1()
    {
        System.out.println("Parent method");
    }
}
public class <b>Child</b> extends <b>Parent</b> {
    public void c1()
    {
        System.out.println("Child method");
    }
    public static void main(String[] args)
    {
        Child cobj = new Child();
        cobj.c1();   <b>//method of Child class</b>
        cobj.p1();   <b>//method of Parent class</b> 
    }
}
</pre>
<p><b>Output</b></p>
<pre>
Child method
Parent method
</pre>
<hr/>
<h4>Another example of Inheritance</h4>
<pre>
class <b>Vehicle</b>
{
    String vehicleType;
}
public class <b>Car</b> extends <b>Vehicle</b> {
    
    String modelType;
    public void showDetail()
    {
        vehicleType = "Car";        <b>//accessing Vehicle class member</b>
        modelType = "sports";
        System.out.println(modelType+" "+vehicleType);
    }
    public static void main(String[] args)
    {
        Car car =new Car();
        car.showDetail();
    }
}
</pre>
<p><b>Output</b></p>
<pre>
sports Car
</pre>
<hr/>
<h4>Types of Inheritance</h4>
<ol class="content">
<li>Single Inheritance</li>
<li>Multilevel Inheritance</li>
<li>Heirarchical Inheritance</li>
</ol>
<p><b>NOTE :</b>Multiple inheritance is not supported in java</p>
<p class="center"><img src="images/types-of-inheritance.jpg" alt="Types of Inheritance in Java"/></p>
<hr/>
<h4>Why multiple inheritance is not supported in Java</h4>
<ul class="content">
<li>To remove ambiguity.</li>
<li>To provide more maintainable and clear design.</li>
</ul>
<p><img src="images/multiple-inheritance-problem.jpg" alt="problem with multiple inheritance" /></p>
<hr/>
<h4>super keyword</h4>
<p>In Java, <code>super</code> keyword is used to refer to immediate parent class of a class. In other words <b>super</b> keyword is used by a subclass whenever it need to refer to its immediate super class.</p><p><img src="images/super-example.jpg" alt="example of super keyword in java" /></p>
<hr/>
<h4>Example of Child class refering Parent class <code>property</code> using <code>super</code> keyword</h4>
<pre>
class <b>Parent</b>
{
    String name;
    
}
public class <b>Child</b> extends <b>Parent</b> {
    String name;
    public void details()
    {
        super.name = "Parent";	    <b>//refers to parent class member</b>
        name = "Child";
        System.out.println(super.name+" and "+name);
    }
    public static void main(String[] args)
    {
        Child cobj = new Child();
        cobj.details();
    }
}
</pre>
<p><b>Output</b></p>
<pre>
Parent and Child
</pre>
<hr/>
<h4>Example of Child class refering Parent class <code>methods</code> using <code>super</code> keyword</h4>
<pre>
class <b>Parent</b>
{
    String name;
    public void details()
    {
      name = "Parent";
        System.out.println(name);
    }  
}
public class <b>Child</b> extends <b>Parent</b> {
    String name;
    public void details()
    {
        super.details();	<b>//calling Parent class details() method</b>
        name = "Child";
        System.out.println(name);
    }
    public static void main(String[] args)
    {
        Child cobj = new Child();
        cobj.details();
    }
}
</pre>
<p><b>Output</b></p>
<pre>
Parent
Child
</pre>
<hr/>
<h4>Example of Child class calling Parent class <code>constructor</code> using <code>super</code> keyword</h4>
<pre>
class <b>Parent</b>
{
    String name;

    public Parent(String n) 
    {
        name = n;
    }
    
}
public class <b>Child</b> extends <b>Parent</b> {
    String name;

    public Child(String n1, String n2) 
    {
        
        super(n1);       <b>//passing argument to parent class constructor</b>
        this.name = n2;
    }
    public void details()
    {
        System.out.println(super.name+" and "+name);
    }
     public static void main(String[] args)
    {
        Child cobj = new Child("Parent","Child");
        cobj.details();
    }
}
</pre>
<p><b>Output</b></p>
<pre>
Parent and Child
</pre>
<hr/>
<h4>Super class reference pointing to Sub class object.</h4>
<p>
In context to above example where Class B extends class A.
<pre> A a=new B();</pre>
is legal syntax because of IS-A relationship is there between class A and Class B.
</p>
<hr/>
<h4>Q. Can you use both this() and super() in a Constructor?</h4>
<p>NO, because both super() and this() must be first statement inside a constructor. Hence we cannot use them together.</p>
<hr/>
<div><ul class="pager">
<li class="previous">
<a href="modifier-in-java.php">&larr; Prev</a>
</li>
<li class="next">
<a href="aggregation.php">Next &rarr;</a>
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