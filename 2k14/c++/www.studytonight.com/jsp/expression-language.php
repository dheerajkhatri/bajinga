<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>JSP Expression Language | JSP Tutorial | Studytonight</title>

<meta name="keywords" content="JSP tutotials, JSP technology notes, Advance Java tutorials, J2EE notes, Expression Language(EL), JSTL, TLD, Scriptlet, Custom Tag, Script-free Pages in JSP, How to write JSP, MVC, Session in JSP, Expression Tag, Declaraction Tag, Page Directive, Include Directive, Taglib Directive, Exception Handling in JSP, Action Element" />

<meta name="description" content="Expression Language(EL) was added to JSP 2.0 specification. The purpose of EL is to produce scriptless JSP pages." />

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
<div class="head-bar-servlet">
<div class="container">
<div id="subject-name">
JSP TECHNOLOGY
</div>
</div>
<div id="subject-info"> <div class="container">

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
<div>" Java Server Pages(JSP) technology is used to create web application. "</div>

</div>

</div>
</div>
</div><!-- Common sub nav bar for all the lesson page, currently holding Google Adsense Code -->

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
<a href="expression-language.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<li class="main"><b>Basics of JSP</b></li>
<li><a href="introduction-to-jsp.php">Introduction to JSP</a></li>
<li><a href="lifecycle-of-jsp.php">Lifecycle of JSP</a></li>
<li><a href="creating-a-jsp-page.php">Creating a JSP Page</a></li>
<li class="main"><b>JSP Scripting Element</b></li>
<li><a href="jsp-scripting-element.php">JSP Scripting Elements</a></li>
<li><a href="jsp-scriptlet-tag.php">Scriptlet Tag</a></li>
<li><a href="jsp-declaration-tag.php">Declaration Tag</a></li>
<li><a href="jsp-directive-tag.php">Directive Tag</a></li>
<li><a href="jsp-expression-tag.php">Expression Tag</a></li>
<li class="main"><b>JSP Implicit Object</b></li>
<li><a href="implicit-object-in-jsp.php">JSP Implicit Object</a></li>
<li class="main"><b>JSP Directive Element</b></li>
<li><a href="jsp-include-directive.php">Include Directive</a></li>
<li><a href="jsp-taglib-directive.php">Taglib Directive</a></li>
<li class="main"><b>JSP Exception Handling</b></li>
<li><a href="exception-handling-in-jsp.php">Exception Handling</a></li>
<li class="main"><b>JSP Standard Tag</b></li>
<li><a href="jsp-action-element.php">JSP Action element</a></li>
<li><a href="javabeans-component.php">JavaBean Component</a></li>
<li><a href="usebean-tag.php">jsp:useBean tag</a></li>
<li><a href="getproperty-tag.php">jsp:getProperty tag</a></li>
<li><a href="setproperty-tag.php">jsp:setProperty tag</a></li>
<li class="main"><b>Expression Language</b></li>
<li><a href="expression-language.php">Expression Language</a></li>
<li class="main"><b>JSTL and Custom Tag</b></li>
<li><a href="jstl-in-jsp.php">JSTL</a></li>
<li><a href="custom-tag.php">Custom Tag</a></li>
<li><a href="creating-a-custom-tag.php">Creating a Custom Tag</a></li>
</ul>
<hr/>
<div class="sidebar-info-box">
<div class="lessbold-title">Test Yourself !</div>
<br/><p>If you have studied all the lessons of JSP, then evaluate yourself by taking these tests.</p>
<p><a href="http://www.studytonight.com/jsp/tests/" class="btn btn-success btn-block">JSP Topical Test</a></p>
</div>
<br/>
<p style="margin-left:2px;">
<script id="mNCC" language="javascript">  medianet_width='200';  medianet_height= '200';  medianet_crid='187662268';  </script>  <script id="mNSC" src="http://contextual.media.net/nmedianet.js?cid=8CUK82SPR" language="javascript"></script>
</p>
</div>
</div><div class="span9">
<div id="body-content">
<h3>Expression Language</h3>
<p>Expression Language(EL) was added to JSP 2.0 specification. The purpose of EL is to produce scriptless JSP pages. The syntax of EL in a JSP is as follows:<p>
<pre>
${expr}
</pre>
<p>Here <b>expr</b> is a valid EL expression. The expression can be mixed with static text and can be combined with other expression to form larger expression.</p>
<p class="center"><img src="images/expression-language-example.jpg" alt="expression language example" /></p>
<hr/>
<h4>How EL expression is use</h4>
<p>EL expression can be used in two ways in a JSP page</p>
<ol class="content">
<li>As attribute values in standard and custom tags. Example</li>
<pre>
< jsp:include page="${location}" >
</pre>
<li>As a output with HTML tag</li>
<pre>
&lt;h1&gt;Welcome ${name}&lt;/h1&gt;
</pre>
</ol>
<hr/>
<h4>EL Implicits Objects</h4>
<p>The following are the implicit object in EL</p>
<p>
<table class="table table-bordered table-striped">
<tr><th>Implicit Object</th><th>Description</th></tr>
<tr><td><b>pageContext</b></td><td>Represent the PageContext object.</td></tr>
<tr><td><b>pageScope</b></td><td>It is used to access the value of variable which is set in the <b>Page</b> scope</td></tr>
<tr><td><b>requestScope</b></td><td>It is used to access the value of variable which is set in the <b>request</b> scope.</td></tr>
<tr><td><b>sessionScope</b></td><td>It is used to access the value of variable which is set in the <b>session</b> scope</td>
</tr><tr><td><b>applicationScope</b></td><td>It is used to access the value of variable which is set in the <b>application</b> scope</td></tr>
<tr><td><b>param</b></td><td>Map a request parameter name to a single value</td></tr>
<tr><td><b>paramValues</b></td><td>Map a request parameter name to corresponding string arrays.</td></tr>
<tr><td><b>header</b></td><td>Map containing header names and single string values.</td></tr>
<tr><td><b>headerValues</b></td><td>Map containing header names to corresponding string arrays.</td></tr>
<tr><td><b>cookie</b></td><td>Map containing cookie names and single string values.</td></tr>
</table>
</p>
<hr/>
<h4>Example of EL</h4>
<p><b>index.jsp</b></p>
<pre>
&lt;form method=&quot;post&quot; action=&quot;welcome.jsp&quot;&gt;
Name &lt;input type=&quot;text&quot; name=&quot;user&quot; &gt;
&lt;input type=&quot;submit&quot; value=&quot;submit&quot;&gt;
&lt;/form&gt;
</pre>
<p><b>welcome.jsp</b></p>
<pre>

&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Welcome Page&lt;/title&gt;
    &lt;/head&gt;

  &lt;body&gt;
        &lt;h1&gt;Welcome ${param.name}&lt;/h1&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>
<hr/>
<h4>Arithmetic Operation available in EL</h4>
<p>The following are the five arithmetic operator avilable in EL.</p>
<p>
<table class="table table-bordered table-striped">
<tr><th>Arithmetic Operation</th><th>Operator</th></tr>
<tr><td>Addition</td><td><code>+</code></td></tr>
<tr><td>Subtraction</td><td><code>-</code></td></tr>
<tr><td>Multiplication</td><td><code>*</code></td></tr>
<tr><td>Division</td><td><code>/ and div</code></td></tr>
<tr><td>Remainder</td><td><code>% and mod</code></td></tr>
</table>
</p>
<hr/>
<h4>Logical and Relational Operator available in EL</h4>
<p>The following are the logical operator and Comparators avilable in EL.</p>
<p>
<table class="table table-bordered table-striped">
<tr><th>Logical and Relational Operator</th><th>Operator</th></tr>
<tr><td>Equals</td><td><code>== and eq</code></td></tr>
<tr><td>Not equals</td><td><code>!= and ne</code></td></tr>
<tr><td>Less Than</td><td><code> < and lt</code></td></tr>
<tr><td>Greater Than</td><td><code> > and gt</code></td></tr>
<tr><td>Greater Than or Equal</td><td><code> >= and ge</code></td></tr>
<tr><td>Less Than or Equal</td><td><code> <= and le</code></td></tr>
<tr><td>and</td><td><code> && and and</code></td></tr>
<tr><td>or</td><td><code> || and or</code></td></tr>
<tr><td>not</td><td><code> ! and not</code></td></tr>
</table>
</p>
<hr/>
<div>
<ul class="pager">
<li class="previous">
<a href="setproperty-tag.php">&larr; Prev</a>
</li>
<li class="next">
<a href="jstl-in-jsp.php">Next &rarr;</a>
</li>
</ul>
</div>
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
</div>  <!-- /footer --></body>
</html>