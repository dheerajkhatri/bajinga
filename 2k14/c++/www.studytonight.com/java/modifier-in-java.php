<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Access and Non-access Modifiers in Core Java | Core Java Tutorial | Studytonight</title>
<meta name="keywords" content="Core java, Java tutorials, Java notes, Java Modifier, Static and Non-static keyword, Method, Method Overloading, Method Overriding Exception Handling, Multi Threading, Java GUI, Java Networking, Generics, Java Input/output, Serialization, ArrayList, HashMap, HashTable, Java Collection API"/> 
<meta name="description" content="Modifiers are keywords that are added to change meaning of a definition. Default, Private, Protected, Public etc are used.">


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
<a href="modifier-in-java.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<h3>Modifiers in Java</h3>
<p>Modifiers are keywords that are added to change meaning of a definition. In Java, modifiers are catagorized into two types,</p>
<ol class="content">
<li>Access control modifier</li>
<li>Non Access Modifier</li>
</ol><hr/>
<h4>1) Access control modifier</h4>
<p>Java language has four access modifier to control access levels for classes, variable methods and constructor.</p>
<ul class="content">
<li><b>Default :</b> Default has scope only inside the same package</li>
<li><b>Public :</b> Public scope is visible everywhere</li>
<li><b>Protected :</b> Protected has scope within the package and all sub classes</li>
<li><b>Private :</b> Private has scope only within the classes</li>
</ul>

<p class="center"><img src="images/access-modifier.jpg" alt="Access modifier in java"/></p>
<hr/>
<h4>2) Non-access Modifier</h4>
<p>Non-access modifiers do not change the accessibility of variables and methods, but they do provide them special properties. Non-access modifiers are of 5 types,</p>
<ol class="content">
<li>Final</li>
<li>Static</li>
<li>Transient</li>
<li>Synchronized</li>
<li>Volatile</li>
</ol>
<br/>
<h4>Final</h4>
<p>Final modifier is used to declare a field as final i.e. it prevents its content from being modified. Final field must be initialized when it is declared.</p>
<p><i>Example :</i></p>
<pre>
class Cloth
{
 final int MAX_PRICE = 999;    //final variable
 final int MIN_PRICE = 699;
 final void display()      //final method
 {
  System.out.println("Maxprice is" + MAX_PRICE );
  System.out.println("Minprice is" + MIN_PRICE);
 }
}
</pre>
<p>A class can also be declared as final. A class declared as final cannot be inherited. <b>String</b> class in java.lang package is a example of final class. Method declared as final can be inherited but you cannot override(redefine) it. 
</p>
<hr/>




<h4>Static Modifier</h4> 
<p>Static Modifiers are used to create class variable and class methods which can be accessed without instance of a class. Lets study how it works with variables and member functions.</p>

<h4>Static with Variables</h4> 
<p>Static variables are defined as a class member that can be accessed without any object of that class. Static variable has only one single storage. All the object of the class having static variable will have the same instance of static variable. Static variables are initialized only once.</p>
<p>Static variable are used to represent common property of a class. It saves memory. Suppose there are 100 employee in a company. All employee have its unique name and employee id but company name will be same all 100 employee. Here company name is the common property. So if you create a class to store employee detail, company_name field will be mark as static.  
</p>
<p><b>Example</b></p>
<pre>
class Employee
{
int e_id;
String name;
static String company_name = "StudyTonight";
}
</pre>
<hr/>
<h4>Example of static variable</h4>
<pre>
class ST_Employee
{
    int eid;
    String name;
    static String company_name ="StudyTonight";
    public void show()
    {
        System.out.println(eid+" "+name+" "+company_name);
    }
    public static void main( String[] args )
    {
     ST_Employee se1 = new ST_Employee();
     se1.eid = 104;
     se1.name = "Abhijit";
     se1.show();
     ST_Employee se2 = new ST_Employee();
     se2.eid = 108;
     se2.name = "ankit";
     se2.show();
    }

}
</pre>
<p><b>Output</b></p>
<pre>
104 Abhijit StudyTonight
108 ankit StudyTonight
</pre> 
<p class="center"><img src="images/static-variable-example.jpg" alt="static variable example"></p>
<hr/>
<h4>Static variable vs Instance Variable</h4>


<table class="table table-bordered table-striped">
<thead><tr><th class="center">Static variable</th><th class="center">Instance Variable</th></tr></thead>
<tbody>
<tr><td>Represent common property</td><td>Represent unique property</td></tr>
<tr><td>Accessed using class name</td><td>Accessed using object</td></tr>
<tr><td>get memory only once</td><td>get new memory each time a new object is created</td></tr>
</tbody>
</table>
<p><b>Example</b></p>
<pre>
public class Test 
{
   static int x = 100;
   int y = 100;
   public void increment()
   {
       x++; y++;
   }
 public static void main( String[] args )
 {
     Test t1 = new Test();
     Test t2 = new Test();
     t1.increment();
     t2.increment();
     System.out.println(t2.y);
     System.out.println(Test.x); <b>//accessed without any instance of class.</b>
 }
}
</pre>
<p><b>Output</b></p>
<pre>
101
102
</pre>
<p>See the difference in value of two variable. Static variable <b>y</b> shows the changes made to it by increment() method on the different object. While instance variable <b>x</b> show only the change made to it by increment() method on that particular instance.</p>
<hr/>
<h4>Static Method</h4> 
<p>A method can also be declared as static. Static methods do not need instance of its class for being accessed. main() method is the most common example of static method. main() method is declared as static because it is called before any object of the class is created.</p>
<p><i>Example :</i></p>
<pre>
class Test 
{
 
 public static void square(int x) 
 {
  System.out.println(x*x);
 }

 public static void main (String[] arg) 
 {
   
  square(8)   <b>//static method square () is called without any instance of class.</b>
 }
}
</pre>
<code><b>Output:</b> 64</code> 
<hr/>
<h4>Static block</h4>
<p>Static block is used to initialize static data member. Static block executes before <code>main()</code> method.</p>
<p><b>Example</b></p>
<pre>
class ST_Employee
{
   int eid;
   String name;
   static String company_name;
    
   static {
    company_name ="StudyTonight";    <b>//static block invoked before main() method</b>	 
    }

    public void show()
    {
        System.out.println(eid+" "+name+" "+company_name);
    }
    public static void main( String[] args )
    {
     ST_Employee se1 = new ST_Employee();
     se1.eid = 104;
     se1.name = "Abhijit";
     se1.show();
     
    }

}</pre>
<p><b>Output</b></p>
<pre>
104 Abhijit StudyTonight
</pre>
<hr/>
<h4>Q. Why a non-static variable cannot be referenced from a static context ?</h4>
<p> When you try to access a non-static variable from a static context like main method, java compiler throws a message like <i>"a non-static variable cannot be referenced from a static context"</i>. This is because non-static variables are related with instance of class(object) and they get created when instance of a class is created by using <b>new</b> operator. So if you try to access a non-static variable without any instance compiler will complain because those variables are not yet created and they don't have any existence until an instance is created and associated with it.
</p>
<p><b>Example of accessing non-static variable from a static context</b></p>
<pre>
class Test
{
 int x;
 public static void main(String[] args)
 {
  x=10;
 }
}
</pre>
<p><b>Output</b></p>
<pre><font color="red">compiler error: non-static variable count cannot be referenced from a static context</font></pre>
<p><b>Same example using instance of class</b></p>
<pre>
class Test
{
 int x;
 public static void main(String[] args)
 {
  Test tt=new Test();
  tt.x=10;  <font color="green">//works fine with instance of class</font>
 }
}
</pre>
<hr/>
<h4>Q. Why main() method is static in java ?</h4>
<p>
Because static methods can be called without any instance of a class and <b>main()</b> is called before any instance of a class is created.
</p>
<hr/>
<h4>Transient modifier</h4> 
<p>When an instance variable is declared as transient, then its value doesn't persist when an object is serialized</p>
<hr/>
<h4>Synchronized modifier</h4> 
<p>When a method is synchronized it can be accessed by only one thread at a time. We will discuss it in detail in Thread.</p>

<hr/>
<h4>Volatile modifier</h4> 
<p>Volatile modifier tells the compiler that the volatile variable can be changed unexpectedly by other parts of your program. Volatile variables are used in case of multithreading program. 
</p>

<hr/>
<div><ul class="pager">
<li class="previous">
<a href="garbage-collection.php">&larr; Prev</a>
</li>
<li class="next">
<a href="inheritance-in-java.php">Next &rarr;</a>
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