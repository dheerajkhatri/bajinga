<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Legacy Classes and Interface - Java Collection Framework | Core Java Tutorial | Studytonight</title>

<meta name="keywords" content="Core java, Java tutorials, Java notes, JVM, Java Array, J2SE, Inheritance, Aggregation, Composition, Polymorphism, Abstraction, Interface, Exception Handling, Multi Threading, Java GUI, Java Networking, Generics, Java Input/output, Serialization, ArrayList, HashMap, HashTable, Java Collection API"/> 
<meta name="description" content="Lets know more about Legacy Classes and Interfaces in the Core Java Collection Framework in this Tutorial"/>

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
<a href="legacy-classes-and-interface.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<h3>Legacy Classes</h3>
<p>Early version of java did not include the <b>Collection</b> framework. It only defined several classes and interface that provide method for storing objects. When <b>Collection</b> framework were added in J2SE 1.2, the original classes were reengineered to support the collection interface. These classes are also known as Legacy classes. All legacy claases and interface were redesign by JDK 5 to support Generics.</p>
<p>The following are the legacy classes defined by <b>java.util</b> package</p>
<ol class="content">
<li>Dictionary</li>
<li>HashTable</li>
<li>Properties</li>
<li>Stack</li>
<li>Vector</li>
</ol>
<p>There is only one legacy interface called <b>Enumeration</b></p>
<p><b>NOTE:</b> All the legacy classes are syncronized</p>
<hr/>
<h4>Enumeration interface</h4>
<ol class="content">
<li><b>Enumeration</b> interface defines method to enumerate through collection of object.</li>
<li>This interface is suspended by <b>Iterator</b> interface.</li>
<li>However some legacy classes such as <b>Vector</b> and <b>Properties</b> defines several method in which <b>Enumeration</b> interface is used.</li>
<li>It specifies the following two methods</li>
<pre>
boolean hasMoreElements()

Object nextElement()
</pre>
</ol>
<hr/>
<h4>Vector class</h4>
<ol class="content">
<li><b>Vector</b> is similar to <b>ArrayList</b> which represents a dynamic array.</li>
<li>The only difference between <b>Vector</b> and <b>ArrayList</b> is that Vector is synchronised while Array is not.</li>
<li>Vector class has following four constructor</li>
<pre>
Vector()

Vector(int size)

Vector(int size, int incr)

Vector(Collection< ? extends E> c)
</pre>
</ol>
<p>Vector defines several legacy method. Lets see some important legacy method define by <b>Vector</b> class.</p>
<table class="table table-bordered table-striped">
<tr><th>Method</th><th>Description</th></tr>
<tr><td>addElement()</td><td>add element to the Vector</td></tr>
<tr><td>elementAt()</td><td>return the element at specified index</td></tr>
<tr><td>elements</td><td>return an enumeration of element in vector</td></tr>
<tr><td>firstElement()</td><td>return first element in the Vector</td></tr>
<tr><td>lastElement()</td><td>return last element in the Vector</td></tr>
<tr><td>removeAllElement()</td><td>remove all element of the Vector</td></tr>
</table>
<hr/>
<h4>Example of Vector</h4>
<pre>
import java.util.*;
public class Test 
{
  public static void main(String[] args) 
   {
      Vector<Integer> ve = new Vector<Integer>();
       ve.add(10);
       ve.add(20);
       ve.add(30);
       ve.add(40);
       ve.add(50);
       ve.add(60);
       
       Enumeration<Integer> en = ve.elements();
       
       while(en.hasMoreElements())
       {
           System.out.println(en.nextElement());
       }
   }
    
}
</pre>
<pre>
<b>Output</b>
10
20
30
40
50
60
</pre>
<hr/>
<h4>Hashtable class</h4>
<ol class="content">
<li>Like HashMap, Hashtable also stores key/value pair in hashtable. However neither <b>keys</b> nor <b>values</b> can be <b>null</b>.</li> <li>There is one more difference between <b>HashMap</b> and <b>Hashtable</b> that is Hashtable is synchronized while HashMap is not.</li>
<li>Hashtable has following four constructor</li>
<pre>
Hashtable()
Hashtable(int size)
Hashtable(int size, float fillratio)
Hashtable(Map< ? extends K, ? extends V> m)
</pre>
</ol>
<hr/>
<h4>Example of Hashtable</h4>
<pre>
import java.util.*;
class HashTableDemo
{
 public static void main(String args[])
 {
  <b>Hashtable< String,Integer> ht = new Hashtable< String,Integer>()</b>;
  ht.put("a",new Integer(100));
  ht.put("b",new Integer(200));
  ht.put("c",new Integer(300));
  ht.put("d",new Integer(400));

  Set st = ht.entrySet();
  Iterator itr=st.iterator();
  while(itr.hasNext())
  {
   Map.Entry m=(Map.Entry)itr.next();
   System.out.println(itr.getKey()+" "+itr.getValue());
  }
 }
}
</pre>
<pre>
<b>Output:</b>
a 100
b 200
c 300
d 400
</pre>
<hr/>
<h4>Difference between HashMap and Hashtable</h4>
<table class="table table-bordered table-striped">
<tr><th>Hashtable</th><th>HashMap</th></tr>
<tr><td>Hashtable class is synchronized.</td><td>HastMap is not synchronize.</td></tr>
<tr><td>Because of Thread-safe, Hashtable is slower than HashMap</td><td>HashMap works faster.</td></tr>
<tr><td>Neither <b>key</b> nor <b>values</b> can be null</td><td>Both <b>key</b> and <b>values</b> can be null</td></tr>
<tr><td>Order of table remain constant over time.</td><td>does not guarantee that order of map remain constant over time.</td></tr>
</table>
<hr/>
<h4>Properties class</h4>
<ol class="content">
<li><b>Properties</b> class extends <b>Hashtable</b> class.</li>
<li>It is used to maintain list of value in which both key and value are <b>String</b></li>
<li><b>Properties</b> class define two constructor</li>
<pre>
Properties()
Properties(Properties default)
</pre>
<li>One advantage of <b>Properties</b> over <b>Hashtable</b> is that we can specify a default property that will be useful when no value is associated with a certain key.</li>
</ol>
<hr/>
<h4>Example of Properties class</h4>
<pre>
import java.util.*;

public class Test 
{
    
   public static void main(String[] args) 
   {
     Properties pr = new Properties();
     pr.put("Java", "James Ghosling");
     pr.put("C++", "Bjarne Stroustrup");
     pr.put("C", "Dennis Ritchie");
     pr.put("C#", "Microsoft Inc.");
     Set< ?> creator = pr.keySet();
     
     for(Object ob: creator)
     {
         System.out.println(ob+" was created by "+ pr.getProperty((String)ob) );
     }
     
   }
    
}
</pre>
<pre>
<b>Output</b>
Java was created by James Ghosling
C++ was created by Bjarne Stroustrup
C was created by Dennis Ritchie
C# was created by Microsoft Inc
</pre>
<hr/>
<div>
<ul class="pager">
<li class="previous">
<a href="comparators-interface-in-java.php">&larr; Prev</a>
</li>
<li class="next">
<a href="java-applet.php">Next &rarr;</a>
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