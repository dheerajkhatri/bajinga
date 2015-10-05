<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Swapping two Variable&apos;s Numerical values Program | C Language Tutorial | Studytonight</title>

<meta name="description" content="Program to swap two variable&apos;s numeric values, Program to sort numbers without using temp variable, Program to sort numbers using bitwise operator and Program to swap two numbers with division and multiplication in C Language" />



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
<div class="head-bar-dbms">
<div class="container">
<div id="subject-name">
C LANGUAGE
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
<div>" C is most widely used general-purpose language today in operating systems, and embedded system development. "</div>

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
return false;
});
</script>
<link href="../css/tipsy_title.css" rel="stylesheet">

<div class="span3">

<div class="sidebar-collpsed-responsive">
<a href="swapping-two-number-program.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<li class="main"><b>Basics of C Language</b></li>
<li><a href="overview-of-c.php">Overview of C</a></li>
<li><a href="features-of-c.php">Features of C</a></li>
<li><a href="first-c-program.php">My First C program</a></li>
<li><a href="c-input-output-function.php">C Input / Output</a></li>
<li><a href="c-syntax.php">C Syntax Rules</a></li>
<li><a href="keywords-and-identifier.php">Keywords and Identifier</a></li>
<li><a href="operators-in-c.php">Operators in C Language</a></li>
<li><a href="datatype-in-c.php">Data Types in C</a></li>
<li><a href="variables-in-c.php">Variables in C</a></li>
<li><a href="decision-making-in-c.php">Decision Making</a></li>
<li><a href="switch-statement-in-c.php">Switch Statement</a></li>
<li><a href="loops-in-c.php">Looping</a></li>
<li><a href="arrays-in-c.php">Arrays</a></li>
<li><a href="string-and-character-array.php">string and character array</a></li>
<li><a href="storage-classes-in-c.php">Storage classes</a></li>

<li class="main"><b>Functions in C</b></li>
<li><a href="user-defined-functions-in-c.php">Introduction to Functions</a></li>
<li><a href="types-of-function-calls.php">Types of Function calls</a></li>
<li><a href="array-in-function-in-c.php">Passing Array to function</a></li>

<li class="main"><b>Structures in C</b></li>
<li><a href="structures-in-c.php">Introduction to Structures</a></li>
<li><a href="typedef.php">Typedef</a></li>
<li><a href="unions-in-c.php">Unions</a></li>

<li class="main"><b>Pointers in C</b></li>
<li><a href="pointers-in-c.php">Pointers concept</a></li>
<li><a href="declaring-and-initializing-pointer.php">Declaring and initializing pointer</a></li>
<li><a href="pointers-with-array.php">Pointer to Array</a></li>
<li><a href="pointers-to-structure-in-c.php">Pointer to Structure</a></li>
<li><a href="pointer-arithmetic-in-c.php">Pointer Arithmetic</a></li>
<li><a href="pointer-with-function-in-c.php">Pointer with Functions</a></li>

<li class="main"><b>Advanced Topics in C</b></li>
<li><a href="file-input-output.php">File Input / Output</a></li>
<li><a href="error-handling-in-c.php">Error Handling</a></li>
<li><a href="dynamic-memory-allocation-in-c.php">Dynamic memory allocation</a></li>
<li><a href="command-line-argument.php">Command line argument</a></li>

<li class="main"><b>C programs</b></li>
<li><a href="factorial-program.php">Find Factorial of a Number</a></li>
<li><a href="reverse-a-string-program.php">Reverse a String</a></li>
<li><a href="fabonacci-series-program.php">Fibonacci Series</a></li>
<li><a href="sum-of-digit-program.php">Sum of Digits of a Number</a></li>
<li><a href="sort-array-element-program.php">Sorting an Array element</a></li>
<li><a href="swapping-two-number-program.php">Swapping two Numbers</a></li>
<li><a href="find-largest-element-using-recursion.php">Largest Number of an Array</a></li>
<li><a href="pallindrome-program.php">Pallindrome Program</a></li>
<li><a href="remove-duplicate-element-program.php">Remove Duplicate Element from Array</a></li>
<li><a href="program-to-write-in-file.php">Create and Write in File</a></li>
<li><a href="program-to-list-files-in-directory.php">List all Files in Directory</a></li>
<li><a href="program-to-find-size-of-file.php">Find Size of a File</a></li>
<li><a href="program-copy-file-to-another-file.php">Copy one File data into Another File</a></li>
<li><a href="program-to-reverse-content-of-file.php">Reverse Content of File</a></li>
</ul>
<hr/>
<div class="sidebar-info-box">
<div class="lessbold-title">Test Yourself !</div>
<br/><p>If you have studied all the lessons of C, then evaluate yourself by taking these tests.</p>
<p><a href="tests/index.html" class="btn btn-success btn-block">C Topical Test</a></p>
</div>
<br/>
<p style="margin-left:2px;">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- square-200 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:200px;height:200px"
     data-ad-client="ca-pub-6137246359299957"
     data-ad-slot="8342031027"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</p>
</div>
</div>
<div class="span9">
<div id="body-content">
<h2>Program to Swap Variable&apos;s Numeric Values</h2>
<p>In this program we will swap values of two variables. The values are numeric and we will swap them using different techniques(some tricky ones too). Let&apos;s start with the simplest technique, which is by using a <b>temporary variable</b></p>
<pre>
#include&lt;stdio.h&gt;
#include&lt;conio.h&gt;

void main()
{
   int x=10, y=15, temp;
   temp = x;
   x = y;
   y = temp;
   printf("x= %d and y= %d", x, y);
   getch();
}
</pre>
<p><b>Output</b></p>
<pre>
x= 15 y= 10	
</pre>
<hr/>
<h3>Program to Swap two Numbers without using Third variable</h3>
<pre>
#include&lt;stdio.h&gt;
#include&lt;conio.h&gt;

void main()
{
   int x=10, y=15;
   x = <b>x+y-(y=x)</b>;
   printf("x= %d and y= %d",x,y);
   getch();
}
</pre>
<p><b>Output</b></p>
<pre>
x= 15 y= 10	
</pre>
<hr/>
<h3>Program to Swap two Numbers using Bitwise Operator</h3>
<pre>
#include&lt;stdio.h&gt;
#include&lt;conio.h&gt;

void main()
{
   int x=6, y=4;
   x = x^y;
   y = x^y;
   x = x^y;
   printf("x= %d and y= %d", x, y);
   getch();
}
</pre>
<p><b>Output</b></p>
<pre>
x= 4 y= 6	
</pre>
<hr/>
<h3>Program to Swap two Numbers using Division and Multiplication</h3>
<pre>
#include&lt;stdio.h&gt;
#include&lt;conio.h&gt;

void main()
{
   int x=6, y=4;
   x = x*y;
   y = x/y;
   x = x/y;
   printf("x= %d and y= %d", x, y);
   getch();
}
</pre>
<p><b>Output</b></p>
<pre>
x= 4 y= 6	
</pre>
<hr/>
<div>
<ul class="pager">
<li class="previous">
<a href="sort-array-element-program.php">&larr; Prev</a>
</li>
<li class="next">
<a href="find-largest-element-using-recursion.php">Next &rarr;</a>
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