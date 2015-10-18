<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Classes of Java Collection Framework | Core Java Tutorial | Studytonight</title>

<meta name="keywords" content="Core java, Java tutorials, Java notes, JVM, Java Array, J2SE, Inheritance, Aggregation, Composition, Polymorphism, Abstraction, Interface, Exception Handling, Multi Threading, Java GUI, Java Networking, Generics, Java Input/output, Serialization, ArrayList, HashMap, HashTable, Java Collection API"/> 
<meta name="description" content="Java provides a set of Collection classes that implements Collection interface. Learn about Collection framework in java in this tutorial."/>


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
<a href="collection-classes.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
</div>
<div class="span9">
<div id="body-content">

<h3>The Collection classes</h3>

<p>Java provides a set of Collection classes that implements Collection interface. Some of these classes provide full implementations that can be used as it is and other abstract classes provides skeletal implementations that can be used as starting points for creating concrete collections. 
</p>
<hr/>
<h3>ArrayList class</h3>
<ol class="content">
<li>ArrayList class extends <b>AbstractList</b> class and implements the <b>List</b> interface.</li> 
<li>ArrayList supports dynamic array that can grow as needed. ArrayList has three constructors.</li>
<pre>
<b>ArrayList</b>()

<b>ArrayList</b>( <i>Collection</i> C )

<b>ArrayList</b>( int <i>capacity</i> )
</pre>
<li>ArrayLists are created with an initial size, when this size is exceeded, it gets enlarged automatically.</li>
<li>It can coontain Duplicate elements and maintains the insertion order.</li>
<li>ArrayLists are not synchronized.</li>
</ol>
<hr/>
<h4>Example of ArrayList</h4>
<pre> 
import java.util.*
class Test
{
 public static void main(String[] args)
 {
  <b>ArrayList< String> al = new ArrayList< String>()</b>;
  al.add("ab");
  al.add("bc");
  al.add("cd");
  system.out.println(al);
 }
}
</pre>
<p><code>Output : [ab,bc,cd]</code></p>
<hr/>
<h4>Getting Array from an ArrayList</h4>
<p><code>toArray()</code> method is used to get an araay containing all the contents of the list. Following are the reasons why you must obtain array from your ArrayList whenever required.</p>
<ul class="content">
<li>To obtain faster processing.</li>
<li>To pass array to methods who do not accept Collectionn as arguments.</li>
<li>To integrate and use collections with legacy code.</li>
</ul>
<hr/>
<h4>Storing User-Defined classes</h4>
<p>
In the above example we are storing only string object in ArrayList collection. But You can store any type of object, including object of class that you create in Collection classes.</p>
<hr/>
<h4>Example of storing User-Defined object</h4>
<p><b>Contact class</b></p>
<pre>
class Contact
{
    String first_name;
    String last_name;
    String phone_no;

    public Contact(String fn,String ln,String pn) 
    {
    first_name = fn;
    last_name = ln;
    phone_no = pn;
    }
    
    public String toString()
    {
        return first_name+" "+last_name+"("+phone_no+")";
    }
}
</pre>
<p><b>Storing Contact class</b></p>
<pre>
public class PhoneBook
{
    
   public static void main(String[] args) 
   {
       Contact c1 = new Contact("Ricky", "Pointing","999100091");
       Contact c2 = new Contact("David", "Beckham","998392819");
       Contact c3 = new Contact("Virat", "Kohli","998131319");
       
    <b>ArrayList< Contact> al = new ArrayList< Contact>();</b>	
     al.add(c1);
     al.add(c2);
     al.add(c3);
     System.out.println(al);
   }
    
}
</pre>
<p><b>Output</b></p>
<pre>
[Ricky Pointing(999100091), David Beckham(998392819), Virat Kohli(998131319)]
</pre>
<hr/>
<h3>LinkedList class</h3>
<ol class="content">
<li>
LinkedList class extends <b>AbstractSequentialList</b> and implements <b>List</b>,<b>Deque</b> and <b>Queue</b> inteface.</li>
<li>It can be used as List, stack or Queue as it implements all the related interfaces.</li>
<li>It can contain duplicate elements and is not synchronized.</li>
</ol>
<hr/>
<h4>Example of LinkedList class</h4>
<pre>
import java.util.* ;
class Test
{
 public static void main(String[] args)
 {
  <b>LinkedList< String> ll = new LinkedList< String>();</b>
  ll.add("a");
  ll.add("b");
  ll.add("c");
  ll.addLast("z");
  ll.addFirst("A");
  System.out.println(ll);
 }
}
</pre>
<p><code>Output : [A, a, b,c, z]</code></p>


<hr/>
<h3>HashSet class</h3>

<ol class="content">
<li>HashSet extends <b>AbstractSet</b> class and implements the <b>Set</b> interface.</li> 
<li>It creates a collection that uses hash table for storage.</li>
<li>HashSet does not maintain any order of elements.</li>
</ol>
<hr/>

<h4>Example of HashSet class</h4>
<pre>
import java.util.*;
class HashSetDemo
{
 public static void main(String args[])
 {
  <b>HashSet< String> hs = new HashSet< String>();</b>
  hs.add("B");
  hs.add("A");
  hs.add("D");
  hs.add("E");
  hs.add("C");
  hs.add("F");
  System.out.println(hs); 
 }
}
</pre>
<p><code>Output: [D, E, F, A, B, C]</code></p>


</p>
<hr/>
<h3>LinkedHashSet Class</h3>
<ol class="content">
<li>LinkedHashSet class extends <b>HashSet</b> class</li>
<li>LinkedHashSet maintains a linked list of entries in the set.</li>
<li>LinkedHashSet stores elements in the order in which elements are inserted.</li>
</ol>
<hr/>
<h4>Example of LinkedHashSet class</h4>
<pre>
import java.util.*;
class LinkedHashSetDemo
{
 public static void main(String args[])
 {
  <b>LinkedHashSet< String> hs = new LinkedHashSet< String>()</b>;
  hs.add("B");
  hs.add("A");
  hs.add("D");
  hs.add("E");
  hs.add("C");
  hs.add("F");
  System.out.println(hs); 
 }
}
</pre>
<p><code>Output : [B, A, D, E, C, F]</code></p>
<hr/>
<h3>TreeSet Class</h3>
<ol class="content">
<li>It extends <b>AbstractSet</b> class and implements the <b>NavigableSet</b> interface.</li>
<li>It stores elements sorted ascending order.</li>
<li>Uses a Tree structure to store elements.</li>
<li>Access and retrieval times are quite fast.</li>
<li>It has four Constructors.</li>
<pre>
<b>TreeSet</b>()

<b>TreeSet</b>( Collection <i>C</i> )

<b>TreeSet</b>( Comparator <i>comp</i> )

<b>TreeSet</b>( SortedSet <i>ss</i> )
</pre>
</ol>
<hr/>
<div><ul class="pager">
<li class="previous">
<a href="collection-interfaces.php">&larr; Prev</a>
</li>
<li class="next">
<a href="iterator-in-collection.php">Next &rarr;</a>
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