<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Using isAlive() and join() in Java Multithreading | Core Java Tutorial | Studytonight</title>
<meta name="keywords" content="Core java, Java tutorials, Inheritance, Aggregation, Composition, Polymorphism, Abstraction, Interface, Exception Handling, Multi Threading, Synchronization, Dead Lock, Java GUI, Java Networking, Generics, Java Input/output, Serialization, Java Collection API"/> 
<meta name="description" content="Sometimes one thread needs to know when another thread is ending. In java, isAlive() and join() are two different methods to check whether a thread has finished its execution."/>

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
<a href="joining-a-thread.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<h3>Joining threads</h3>
<p>Sometimes one thread needs to know when another thread is ending. In java, <b>isAlive()</b> and <b>join()</b> are two different methods to check whether a thread has finished its execution.</p>
<p>The <b>isAlive()</b> methods return <b>true</b> if the thread upon which it is called is still running otherwise it return <b>false</b>.</p> 
<pre>
<i>final</i> boolean <b>isAlive()</b>
</pre>

<p>But, <b>join()</b> method is used more commonly than <b>isAlive()</b>. This method waits until the thread on which it is called terminates.</p>
<pre>
<i>final</i> void <b>join()</b> throws <b>InterruptedException</b>
</pre>
<p>Using <b>join()</b> method, we tell our thread to wait until the specifid thread completes its execution. There are overloaded versions of <b>join()</b> method, which allows us to specify time for which you want to wait for the specified thread to terminate.</p>
<pre>
<i>final</i> void <b>join</b>(long <i>milliseconds</i>) throws <b>InterruptedException</b>
</pre>
<hr/>
<h4>Example of <code>isAlive</code> method</h4>
<pre class="prettyprint">
public class <b>MyThread</b> extends <b>Thread</b>
{
public void run()
   {
       System.out.println("r1 ");
       try{
        Thread.sleep(500);
    }catch(InterruptedException ie){}
       
       System.out.println("r2 ");
  }
public static void main(String[] args)
{
MyThread t1=new MyThread();
MyThread t2=new MyThread();
t1.start(); 
t2.start();
System.out.println(<b>t1.isAlive()</b>);
System.out.println(<b>t2.isAlive()</b>);
}
}
</pre>
<p><b>Output</b></p>
<pre>
r1 
true
true
r1 
r2 
r2 
</pre>
<hr/>
<h4>Example of thread without <code>join()</code> method</h4>
<pre>
public class <b>MyThread</b> extends <b>Thread</b>
{
public void run()
   {
       System.out.println("r1 ");
       try{
        Thread.sleep(500);
    }catch(InterruptedException ie){}
       
       System.out.println("r2 ");
  }
public static void main(String[] args)
{
MyThread t1=new MyThread();
MyThread t2=new MyThread();
t1.start(); 
t2.start();
}
}
</pre>
<p><b>Output</b></p>
<pre>
r1
r1
r2
r2
</pre>
<p>In this above program two thread t1 and t2 are created. t1 starts first and after printing "r1" on console thread t1 goes to sleep for 500 mls.At the same time Thread t2 will start its process and print "r1" on console and then goes into sleep for 500 mls. Thread t1 will wake up from sleep and print "r2" on console similarly thread t2 will wake up from sleep and print "r2" on console. So you will get output like <code>r1 r1 r2 r2</code></p>
<hr/>
<h4>Example of thread with <code>join()</code> method</h4>
<pre>
public class <b>MyThread</b> extends <b>Thread</b>
{
public void run()
   {
       System.out.println("r1 ");
       try{
        Thread.sleep(500);
    }catch(InterruptedException ie){}
       
       System.out.println("r2 ");
  }
public static void main(String[] args)
{
MyThread t1=new MyThread();
MyThread t2=new MyThread();
<b>t1.start();</b>
 
try{
  <b>t1.join();</b>		<font color>//Waiting for t1 to finish</font>
}catch(InterruptedException ie){}

<b>t2.start();</b>
}
}
</pre>
<p><b>Output</b></p>
<pre>
r1 
r2 
r1 
r2
</pre>
<p>In this above program join() method on thread t1 ensure that t1 finishes it process before thread t2 starts.</p>
<hr/>
<h4>Specifying time with join()</h4>
<p>If in the above program, we specify time while using <b>join()</b> with <b>m1</b>, then <b>m1</b> will execute for that time, and then <b>m2</b> and <b>m3</b> will join it. </p>
<pre>
<b>m1.join(1500);</b>
</pre>
Doing so, initially m1 will execute for 1.5 seconds, after which m2 and m3 will join it.
<hr/>
<div><ul class="pager">
<li class="previous">
<a href="creating-a-thread.php">&larr; Prev</a>
</li>
<li class="next">
<a href="synchronization.php">Next &rarr;</a>
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