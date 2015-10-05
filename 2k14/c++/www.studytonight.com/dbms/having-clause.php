<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Having clause with Group SQL Functions | DBMS Tutorial | Studytonight</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Database technology Notes, RDBMS, SQL Query, E-R diagram, Generalization, Specialization, Aggregation, Database Model, Normalization,Wildcards,having, SQL Sequence,LIKE clause, SQL Constraints, Database View, table, SQL Join"/> 
<meta name="description" content="having clause is used with SQL Queries to give more precise condition for a statement. It is used to mention condition in Group based SQL functions, just like WHERE clause."/>

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
<div class="head-bar-dbms">
<div class="container">
	<div id="subject-name">
		DATABASE TECHNOLOGY
	</div>
</div>

<div id="subject-info"><div class="container">

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
<div>" Without SQL, websites will never have any way to handle Databases for data. "</div>

</div></div>

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
});

});
</script>
<link href="../css/tipsy_title.css" rel="stylesheet">

<div class="span3">

<div class="sidebar-collpsed-responsive">
<a href="having-clause.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<li class="main"><b>Database Concept</b></li>
<li><a href="overview-of-dbms">Overview of DBMS</a></li>
<li><a href="architecture-of-database">Database Architecture</a></li>
<li><a href="database-model">Database Model</a></li>
<li><a href="codd-rule">Codd&apos;s rule</a></li>
<li><a href="rdbms-concept">RDBMS Concept</a></li>
<li><a href="database-key">Database key</a></li>
<li><a href="database-normalization">Normalization</a></li>
<li><a href="er-diagram">E-R Diagrams</a></li>
<li><a href="generalization-and-specialization">Generalization and Specialization</a></li>

<li class="main"><b>SQL Concept</b></li>
<li><a href="introduction-to-sql">SQL Introduction</a></li>

<li class="main"><b>DDL Command</b></li>
<li><a href="create-query">Create query</a></li>
<li><a href="alter-query">Alter query</a></li>
<li><a href="truncate-drop-rename-query">Truncate, Drop and Rename query</a></li>

<li class="main"><b>DML Command</b></li>
<li><a href="dml-command">All DML command</a></li>

<li class="main"><b>TCL Command</b></li>
<li><a href="tcl-command">All TCL Command</a></li>

<li class="main"><b>DCL Command</b></li>
<li><a href="dcl-command">All DCL Command</a></li>
<li><a href="where-clause">WHERE clause</a></li>
<li><a href="select-query">SELECT query</a></li>
<li><a href="like-clause">LIKE clause</a></li>
<li><a href="orderby-clause">ORDER BY clause</a></li>
<li><a href="groupby-clause">Group BY clause</a></li>
<li><a href="having-clause">Having clause</a></li>
<li><a href="distinct-keyword">DISTINCT keyword</a></li>
<li><a href="sql-and-or-operator">AND & OR operator</a></li>

<li class="main"><b>Advance SQL</b></li>
<li><a href="sql-constraints">SQL Constraints</a></li>
<li><a href="sql-function">SQL function</a></li>
<li><a href="joining-in-sql">SQL Join</a></li>
<li><a href="sql-alias">SQL Alias</a></li>
<li><a href="set-operation-in-sql">SQL SET operation</a></li>
<li><a href="sql-sequences">SQL Sequences</a></li>
<li><a href="sql-views">SQL Views</a></li>
</ul>
<hr/>
<div class="sidebar-info-box">
<div class="lessbold-title">Test Yourself !</div>
<br/><p>If you have studied all the lessons of DBMS, then evaluate yourself by taking these tests.</p>
<p><a href="tests/index.html" class="btn btn-success btn-block">DBMS Topical Test</a></p>
</div>
<br/>
<p style="margin-left:2px;">
<script id="mNCC" language="javascript">  medianet_width='200';  medianet_height= '200';  medianet_crid='187662268';  </script>  <script id="mNSC" src="http://contextual.media.net/nmedianet.js?cid=8CUK82SPR" language="javascript"></script>
</p>
</div>
</div><div class="span9">
<div id="body-content">
<h3>HAVING Clause</h3>
<p>having clause is used with SQL Queries to give more precise condition for a statement. It is used to mention condition in Group based SQL functions, just like WHERE clause.</p>
<p>Syntax for having will be,</p>
<pre>
select column_name, function(column_name)
FROM table_name
WHERE column_name condition
GROUP BY column_name
<b>HAVING</b> function(column_name) condition
</pre>
<hr/>
<h4>Example of HAVING Statement</h4>
<p>Consider the following <b>Sale</b> table.</p>
<table class="table table-bordered table-striped">
<tr><th>oid</th><th>order_name</th><th>previous_balance</th><th>customer</th></tr>
<tr><td>11</td><td>ord1</td><td>2000</td><td>Alex</td></tr>
<tr><td>12</td><td>ord2</td><td>1000</td><td>Adam</td></tr>
<tr><td>13</td><td>ord3</td><td>2000</td><td>Abhi</td></tr>
<tr><td>14</td><td>ord4</td><td>1000</td><td>Adam</td></tr>
<tr><td>15</td><td>ord5</td><td>2000</td><td>Alex</td></tr>
</table>
<p>Suppose we want to find the customer whose previous_balance sum is more than 3000.</p>
<p>We will use the below SQL query,</p>
<pre>
SELECT *
from sale group customer
having sum(previous_balance) > 3000
</pre>
<p>Result will be,</p>
<table class="table table-bordered table-striped">
<tr><th>oid</th><th>order_name</th><th>previous_balance</th><th>customer</th></tr>
<tr><td>11</td><td>ord1</td><td>2000</td><td>Alex</td></tr>
</table>
<hr/>
<hr/>
<div>
<ul class="pager">
<li class="previous">
<a href="groupby-clause.php">&larr; Prev</a>
</li>
<li class="next">
<a href="distinct-keyword.php">Next &rarr;</a>
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