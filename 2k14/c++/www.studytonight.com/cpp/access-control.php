<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Access Control in C++ classes : Public, Private and Protected | C++ Tutorial | Studytonight</title>
<meta name="description" content="Access specifiers in C++ class defines the access control rules. C++ has 3 new keywords introduced, namely, public, private and protected. ">
<meta name="keywords" content="C++ Notes, C++ tutorial, OOPS concept, Encpsulation, Variables in C++, for loop, if-else condition, switch statement, Functionc, Call be value, reference, Constant, Static, Constructor, Destructor, Inline functions, Friend functions, namespace, virtual, runtime polymorphism, early binding, late binding, operator overloading, function overloading, function overriding">

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

<div class="head-bar-cpp">
	<div class="container">
	<div id="subject-name">
		C++ TUTORIALS
	</div>
	</div>
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
<div>" C++ is a widely used language even Adobe Photoshop is developed in C++ programming language. "</div>

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
<a href="access-control.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<li class="main"><b>Overview of C++</b></li>
<li><a href="introduction-to-cpp.php">Introduction to C++</a></li>
<li><a href="cpp-and-oops-concepts.php">OOPS concepts basic</a></li>
<li><a href="basics-of-cpp.php">Basic Syntax and Structure</a></li>
<li><a href="datatypes-and-modifiers-in-cpp.php">Data types and Modifiers</a></li>
<li><a href="variables-scope-details.php">Variables in C++</a></li>
<li><a href="operators-and-their-types.php">Operators in C++</a></li>
<li><a href="sizeof-and-typedef.php">sizeof and typedef in C++</a></li>
<li><a href="decision-making-in-cpp">Decision Making</a></li>
<li><a href="loops-in-cpp">Loop types</a></li>
<li><a href="storage-classes-in-cpp">Storage Classes</a></li>
<li><a href="functions-in-cpp">Functions</a></li>

<li class="main"><b>Core C++ Concepts</b></li>
<li><a href="class-and-objects.php">Classes and Objects</a></li>
<li><a href="access-control.php">Access Controls in classes</a></li>
<li><a href="defining-class-and-object.php">Defining class and object</a></li>
<li><a href="accessing-data-members.php">Accessing Data Members</a></li>
<li><a href="member-functions-cpp.php">Member Functions in class</a></li>
<li><a href="types-of-member-function.php">Types of Member Functions</a></li>
<li><a href="inline-functions.php">Inline Functions</a></li>
<li><a href="function-overloading.php">Function Overloading</a></li>
<li><a href="constructors-and-destructors-in-cpp">Constructor and Destructor</a></li>
<li><a href="namespace-in-cpp.php">Namespace</a></li>
<li><a href="static-keyword.php">Static Keyword</a></li>
<li><a href="const-keyword.php">Const Keyword</a></li>
<li><a href="references-in-cpp.php">Refrences</a></li>
<li><a href="copy-constructor-in-cpp.php">Copy Constructor</a></li>
<li><a href="pointer-to-members.php">Pointer to Members</a></li>

<li class="main"><b>Inheritance</b></li>
<li><a href="overview-of-inheritance.php">Introduction to Inheritance</a></li>
<li><a href="types-of-inheritance.php">Types of Inheritance</a></li>
<li><a href="order-of-constructor-call.php">Order of Constructor Call</a></li>
<li><a href="upcasting.php">Upcasting</a></li>

<li class="main"><b>Polymorphism</b></li>
<li><a href="function-overriding.php">Function Overriding</a></li>
<li><a href="virtual-functions.php">Virtual Functions</a></li>
<li><a href="abstract-class-and-pure-virtual.php">Abstract class and Pure Virtual Functions</a></li>
<li><a href="virtual-destructors.php">Virtual Destructors</a></li>

<li class="main"><b>Operator Overloading</b></li>
<li><a href="operator-overloading.php">Operator Overloading</a></li>
<li><a href="operator-overloading-examples.php">Operator Overloading Examples</a></li>
</ul>
<br/>
<div><a href="stl/index.html" class="btn btn-warning btn-sm">Standard Template Library &rarr;</a></div>
<hr/>
<div class="sidebar-info-box">
<div class="lessbold-title">Test Yourself !</div>
<br/><p>If you have studied all the lessons of C++, then evaluate yourself by taking these tests.</p>
<p><a href="../tests?subject=cpp" class="btn btn-success btn-block">C++ Topical Test</a></p>
</div>
<br/>
<p style="margin-left:2px;">
<script id="mNCC" language="javascript">  medianet_width='200';  medianet_height= '200';  medianet_crid='187662268';  </script>  <script id="mNSC" src="http://contextual.media.net/nmedianet.js?cid=8CUK82SPR" language="javascript"></script>
</p>
</div>
</div>
<div class="span9">
<div id="body-content">
<h3>Access Control in Classes</h3>
<p>Now before studying how to define class and its objects, lets first quickly learn what are access specifiers.
</p>
<p>Access specifiers in C++ class defines the access control rules. C++ has 3 new keywords introduced, namely,</p> 
<ol class="content">
<li>public</li>
<li>private</li>
<li>protected</li> 
</ol>
<p>These access specifiers are used to set boundaries for availability of members of class be it data members or member functions</p>

<p>Access specifiers in the program, are followed by a colon. You can use either one, two or all 3 specifiers in the same class to set different boundaries for different class members. They change the boundary for all the declarations that follow them.
</p>
<hr/>
<h4>Public</h4>
<p>Public, means all the class members declared under public will be available to everyone. The data members and member functions declared public can be accessed by other classes too. Hence there are chances that they might change them. So the key members must not be declared public.
</p>
<pre>class PublicAccess
{
 public:   // public access specifier
 int x;            // Data Member Declaration 
 void display();   // Member Function decaration
}
</pre>
<hr/>

<h4>Private</h4>
<p>Private keyword, means that no one can access the class members declared private outside that class. If someone tries to access the private member, they will get a compile time error. By default class variables and member functions are private.
</p>
<pre>class PrivateAccess
{
 private:   // private access specifier
 int x;            // Data Member Declaration 
 void display();   // Member Function decaration
}
</pre>
<hr/>
<h4>Protected</h4>
<p>Protected, is the last access specifier, and it is similar to private, it makes class member inaccessible outside the class. But they can be accessed by any subclass of that class. 
(If class A is inherited by class B, then class B is subclass of class A. We will learn this later.)
</p>
<pre>class ProtectedAccess
{
 protected:   // protected access specifier
 int x;            // Data Member Declaration 
 void display();   // Member Function decaration
}
</pre>
<hr/>
<div><ul class="pager">
<li class="previous">
<a href="class-and-objects.php">&larr; Prev</a>
</li>
<li class="next">
<a href="defining-class-and-object.php">Next &rarr;</a>
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