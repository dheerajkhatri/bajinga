<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Data types and Identifier in Java | Core Java Tutorial | Studytonight</title>
<meta name="keywords" content="Core java, Java tutorial, Java Basics, Inheritance, Aggregation, Composition, Polymorphism, Abstraction, Interface, Exception Handling, Multi Threading, Synchronization, Dead Lock, Java GUI, Java Networking, Generics, Java Input/output, Serialization, Java Collection API"/> 
<meta name="description" content="Java language has a rich implementation of data types. Lets learn about Data Ttpes and Identifiers in this tutorial."/>

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
<a href="datatypes-and-identifier.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<li class="main"><b>Basics of Java</b></li>
<li><a href="overview-of-java">Overview of Java</a></li>
<li><a href="features-of-java">Features of Java</a></li>
<li><a href="setting-classpath-for-java">Setting Java Enviroment</a></li>
<li><a href="component-of-java">Introduction to JVM</a></li>
<li><a href="first-java-program">My First Java Program</a></li>
<li><a href="datatypes-and-identifier">Data type and Identifier</a></li>
<li><a href="type-casting-in-java">Typecasting</a></li>
<li><a href="variable">Variable in Java</a></li>
<li><a href="array">Java Array</a></li>
<li><a href="operators-in-java">Operators in Java</a></li>


<li class="main"><b>OOPS Concepts</b></li>
<li><a href="object-and-classes.php">Objects and Classes</a></li>
<li><a href="method-and-overloaded-method.php">Method Overloading</a></li>
<li><a href="constructor-in-java.php">Constructor in Java</a></li>
<li><a href="this-keyword-in-java.php">this keyword</a></li>
<li><a href="garbage-collection.php">Garbage Collection</a></li>
<li><a href="modifier-in-java.php">Java Modifiers</a></li>
<li><a href="inheritance-in-java.php">Inheritance</a></li>
<li><a href="aggregation.php">Aggregation</a></li>
<li><a href="method-overriding-in-java.php">Method Overriding</a></li>
<li><a href="dynamic-method-dispatch.php">Runtime Polymorphism</a></li>
<li><a href="instanceof-operator.php">instanceof Operator</a></li>
<li><a href="command-line-argument.php">Command line Argument</a></li>
<li><a href="package-in-java.php">Package</a></li>
<li><a href="abstract-class.php">Abstract class</a></li>
<li><a href="java-interface.php">Interface</a></li>
<li><a href="nested-classes.php">Nested Classes</a></li>

<li class="main"><b>String Handling</b></li>
<li><a href="string-handling-in-java.php">Introduction to String</a></li>
<li><a href="string-class-functions.php">String class Fucntions</a></li>
<li><a href="stringbuffer-class.php">StringBuffer class</a></li>
<li><a href="stringbuilder-class.php">StringBuilder class</a></li>


<li class="main"><b>Exception Handling</b></li>
<li><a href="exception-handling.php">Introduction to Exceptions</a></li>
<li><a href="try-and-catch-block.php">try and catch block</a></li>
<li><a href="try-with-resource-statement.php">try with resource statement</a></li>
<li><a href="throw-throws-and-finally-keyword.php">throw, throws and finally</a></li>
<li><a href="create-your-own-exception.php">User made Exception Subclass</a></li>
<li><a href="methodoverriding-with-exception-handling.php">Method Overriding with Exception Handling</a></li>
<li><a href="chained-exception-in-java.php">Chained Exceptions</a></li>

<li class="main"><b>Multithreading in Java</b></li>
<li><a href="multithreading-in-java.php">Multithreading</a></li>
<li><a href="thread-class-and-functions.php">Thread class</a></li>
<li><a href="creating-a-thread.php">Creating a thread</a></li>
<li><a href="joining-a-thread.php">Joining a thread</a></li>
<li><a href="synchronization.php">Synchronization</a></li>
<li><a href="interthread-communication.php">Interthread Communication</a></li>


<li class="main"><b>Advanced topics</b></li>
<li><a href="enumerations.php">Enumerations</a></li>
<li><a href="autoboxing-unboxing-java.php">Autoboxing and Unboxing</a></li>
<li><a href="java-io-stream.php">Java I/O Stream</a></li>
<li><a href="serialization-and-deserialization.php">Serialization</a></li>
<li><a href="networking-in-java.php">Java Networking</a></li>
<li><a href="generic-in-java.php">Generics</a></li>


<li class="main"><b>Collection Framework</b></li>
<li><a href="collection-framework.php">Introduction to Collection</a></li>
<li><a href="collection-interfaces.php">Collection Interfaces</a></li>
<li><a href="collection-classes.php">Collection Classes</a></li>
<li><a href="iterator-in-collection.php">Iterator and ListIterator</a></li>
<li><a href="map-interface-in-java.php">Map Interface</a></li>
<li><a href="comparators-interface-in-java.php">Comparator Interface</a></li>
<li><a href="legacy-classes-and-interface.php">Legacy Classes</a></li>



<li class="main"><b>Java GUI</b></li>
<li><a href="java-applet.php">Applet</a></li>
<li><a href="event-handling-in-java.php">Event Handling</a></li>
<li><a href="java-awt.php">AWT</a></li>
<li><a href="java-swing.php">Swing</a></li>
<li><a href="java-swing-components.php">Swing Component</a></li>

<li class="main"><b>Reflection API</b></li>
<li><a href="reflection-api.php">Introduction to Reflection</a></li>
<li><a href="reflection-classes.php">Reflection classes</a></li>
<li class="main"><b>RMI Application</b></li>
<li><a href="rmi-in-java.php">RMI Application</a></li>

<li class="main"><b>JDBC</b></li>
<li><a href="introduction-to-jdbc.php">Introduction to JDBC</a></li>
<li><a href="java-sql-package.php">SQL Package</a></li>
<li><a href="steps-to-connect-to-database-in-java.php">Steps to Connect to Database</a></li>
<li><a href="connecting-to-access.php">Connecting to Access using Type-1 Driver</a></li>
<li><a href="connecting-to-oracle.php">Connecting to Oracle using Thin Driver</a></li>
<li><a href="connecting-to-mysql.php">Connecting to MySQL using Thin Driver</a></li>
</ul>
<hr/>
<div class="sidebar-info-box">
<div class="lessbold-title">Test Yourself !</div>
<br/><p>If you have studied all the lessons of JAVA, then evaluate yourself by taking these tests.</p>
<p><a href="tests/index.html" class="btn btn-success btn-block">Java Topical Test</a></p>
</div>
<br/>
<p style="margin-left:2px;">
<script id="mNCC" language="javascript">  medianet_width='200';  medianet_height= '200';  medianet_crid='187662268';  </script>  <script id="mNSC" src="http://contextual.media.net/nmedianet.js?cid=8CUK82SPR" language="javascript"></script>
</p>
</div>
</div><div class="span9">
<div id="body-content">
<h3>Data Types in Java</h3>
<p>Java language has a rich implementation of data types. Data types specify size and the type of values that can be stored in an identifier.</p>
<p>In java, data types are classified into two catagories :</p>
<ol class="content">
<li>Primitive Data type</li>
<li>Non-Primitive Data type</li>
</ol>
<hr/>
<h4>1) Primitive Data type</h4>
<p>A primitive data type can be of eight types :</p> 
<table class="table table-bordered">
<thead><th colspan="8">Primitive Data types</th></thead>
<tbody>
<tr><td>
<code>char</code></td><td><code>boolean</code></td><td><code>byte</code> </td><td><code>short</code></td><td><code>int</code></td><td><code>long</code></td><td><code>float</code></td><td> <code>double</code></td></tr>
</tbody>
</table>
<p>Once a primitive data type has been declared its type can never change, although in most cases its value can change. These eight primitive type can be put into four groups</p><br/>

<h4>Integer</h4>
<p>This group includes <code>byte</code>, <code>short</code>, <code>int</code>, <code>long</code></p>
<p><b>byte :</b> It is 8 bit integer data type. Value range from -128 to 127. Default value zero. example: <code>byte b=10;</code> </p>
<p><b>short :</b> It is 16 bit integer data type. Value range from -32768 to 32767. Default value zero. example: <code>short s=11;</code> </p>
<p><b>int :</b> It is 32 bit integer data type. Value range from -2147483648 to 2147483647. Default value zero. example: <code>int i=10;</code> </p>
<p><b>long :</b> It is 64 bit integer data type. Value range from -9,223,372,036,854,775,808 to 9,223,372,036,854,775,807. Default value zero. example: <code>long l=100012;</code> </p><br/>

<h4>Floating-Point Number</h4>
<p>This group includes <code>float</code>, <code>double</code></p>
<p><b>float :</b> It is 32 bit float data type. Default value 0.0f. example: <code>float ff=10.3f;</code> </p>
<p><b>double :</b> It is 64 bit float data type. Default value 0.0d. example: <code>double db=11.123;</code> </p><br/>


<h4>Characters</h4>
<p>This group represent <code>char</code>, which represent symbols in a character set, like letters and numbers.</p>
<p><b>char :</b> It is 16 bit unsigned unicode character. Range 0 to 65,535. example: <code>char c='a';</code> </p><br/>

<h4>Boolean</h4>
<p>This group represent <code>boolean</code>, which is a special type for representing true/false values. They are defined constant of the language. example: <code>boolean b=true;</code></p>
<hr/>
<h4>2) Non-Primitive(Reference) Data type</h4>
<p>A reference data type is used to refer to an object. A reference variable is declare to be of specific and that type can never be change. We will talk a lot more about reference data type later in Classes and Object lesson.</p>
<hr/>
<h3>Identifiers in Java</h3>
<p>All Java components require names. Name used for classes, methods, interfaces and variables are called <b>Identifier</b>. Identifier must follow some rules. Here are the rules:</p>
<ul class="content">
<li>All identifiers must start with either a letter( a to z or A to Z ) or currency character($) or an underscore.</li>
<li>After the first character, an identifier can have any combination of characters.</li>
<li>A Java <b>keyword</b> cannot be used as an identifier.</li>
<li>Identifiers in Java are case sensitive, foo and Foo are two different identifiers.</li>
</ul>

<hr/>
<div><ul class="pager">
<li class="previous">
<a href="first-java-program.php">&larr; Prev</a>
</li>
<li class="next">
<a href="type-casting-in-java.php">Next &rarr;</a>
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