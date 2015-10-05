<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SQL Functions like SUM(), AVG() etc | DBMS Tutorial | Studytonight</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Database technology Notes, RDBMS, SQL Query, E-R diagram, Generalization, Specialization, Aggregation, Database Model, Normalization,Wildcards,having, SQL constraints,Unique,NOT NULL,Primary key, SQL Constraints, Database View, table, SQL Join"/> 
<meta name="description" content="SQL provide many built-in function to perform operation on data. These function are useful while performing mathematical calculation, string concatenation, sub-strings etc."/>

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
<a href="sql-function.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<h3>SQL Functions</h3>
<p>
SQL provides many built-in functions to perform operations on data. These functions are useful while performing mathematical calculations, string concatenations, sub-strings etc. SQL functions are divided into two catagories,</p>
<ul class="content">
<li>Aggregrate Functions</li>
<li>Scalar Functions</li>
</ul>
<hr/>
<h4>Aggregrate Functions</h4>
<p>These functions return a single value after calculating from a group of values.Following are some frequently used Aggregrate functions.</p>
<hr/>
<h4>1) AVG()</h4>
<p> Average returns average value after calculating from values in a numeric column.</p>
<p>Its general Syntax is,</p>
<pre>
SELECT <b>AVG</b>(column_name) from <i>table_name</i>
</pre>
<hr/>
<h4>Example using AVG()</h4>
<p>Consider following <b>Emp</b> table</p>
<table class="table table-bordered table-striped">
<tr><th>eid</th><th>name</th><th>age</th><th>salary</th></tr>
<tr><td>401</td><td>Anu</td><td>22</td><td>9000</td></tr>
<tr><td>402</td><td>Shane</td><td>29</td><td>8000</td></tr>
<tr><td>403</td><td>Rohan</td><td>34</td><td>6000</td></tr>
<tr><td>404</td><td>Scott</td><td>44</td><td>10000</td></tr>
<tr><td>405</td><td>Tiger</td><td>35</td><td>8000</td></tr>
</table>
<p>SQL query to find average of salary will be,</p>
<pre>
SELECT <b>avg(salary)</b> from Emp;
</pre>
<p>Result of the above query will be,</p>
<table class="table table-bordered table-striped">
<tr><th>avg(salary)</th></tr>
<tr><td>8200</td></tr>
</table>
<hr/>
<h4>2) COUNT()</h4>
<p> Count returns the number of rows present in the table either based on some condition or without condition.</p>
<p>Its general Syntax is,</p>
<pre>
SELECT <b>COUNT</b>(column_name) from <i>table-name</i>
</pre>
<hr/>
<h4>Example using COUNT()</h4>
<p>Consider following <b>Emp</b> table</p>
<table class="table table-bordered table-striped">
<tr><th>eid</th><th>name</th><th>age</th><th>salary</th></tr>
<tr><td>401</td><td>Anu</td><td>22</td><td>9000</td></tr>
<tr><td>402</td><td>Shane</td><td>29</td><td>8000</td></tr>
<tr><td>403</td><td>Rohan</td><td>34</td><td>6000</td></tr>
<tr><td>404</td><td>Scott</td><td>44</td><td>10000</td></tr>
<tr><td>405</td><td>Tiger</td><td>35</td><td>8000</td></tr>
</table>
<p>SQL query to count employees, satisfying specified condition is,</p>
<pre>
SELECT <b>COUNT(name)</b> from Emp where salary = 8000;
</pre>
<p>Result of the above query will be,</p>
<table class="table table-bordered table-striped">
<tr><th>count(name)</th></tr>
<tr><td>2</td></tr>
</table>
<hr/>
<h4>Example of COUNT(distinct)</h4>
<p>Consider following <b>Emp</b> table</p>
<table class="table table-bordered table-striped">
<tr><th>eid</th><th>name</th><th>age</th><th>salary</th></tr>
<tr><td>401</td><td>Anu</td><td>22</td><td>9000</td></tr>
<tr><td>402</td><td>Shane</td><td>29</td><td>8000</td></tr>
<tr><td>403</td><td>Rohan</td><td>34</td><td>6000</td></tr>
<tr><td>404</td><td>Scott</td><td>44</td><td>10000</td></tr>
<tr><td>405</td><td>Tiger</td><td>35</td><td>8000</td></tr>
</table>
<p>SQL query is,</p>
<pre>
SELECT COUNT(<b>distinct salary</b>) from emp;
</pre>
<p>Result of the above query will be,</p>
<table class="table table-bordered table-striped">
<tr><th>count(distinct salary)</th></tr>
<tr><td>4</td></tr>
</table>
<hr/>


<h4>3) FIRST()</h4>
<p> First function returns first value of a selected column</p>
<p>Syntax for FIRST function is,</p>
<pre>
SELECT <b>FIRST</b>(column_name) from <i>table-name</i>
</pre>
<hr/>
<h4>Example of FIRST()</h4>
<p>Consider following <b>Emp</b> table</p>
<table class="table table-bordered table-striped">
<tr><th>eid</th><th>name</th><th>age</th><th>salary</th></tr>
<tr><td>401</td><td>Anu</td><td>22</td><td>9000</td></tr>
<tr><td>402</td><td>Shane</td><td>29</td><td>8000</td></tr>
<tr><td>403</td><td>Rohan</td><td>34</td><td>6000</td></tr>
<tr><td>404</td><td>Scott</td><td>44</td><td>10000</td></tr>
<tr><td>405</td><td>Tiger</td><td>35</td><td>8000</td></tr>
</table>
<p>SQL query</p>
<pre>
SELECT FIRST(salary) from Emp;
</pre>
<p>Result will be,</p>
<table class="table table-bordered table-striped">
<tr><th>first(salary)</th></tr>
<tr><td>9000</td></tr>
</table>
<hr/>

<h4>4) LAST()</h4>
<p> LAST return the return last value from selected column</p>
<p>Syntax of LAST function is,</p>
<pre>
SELECT <b>LAST</b>(column_name) from <i>table-name</i>
</pre>
<hr/>
<h4>Example of LAST()</h4>
<p>Consider following <b>Emp</b> table</p>
<table class="table table-bordered table-striped">
<tr><th>eid</th><th>name</th><th>age</th><th>salary</th></tr>
<tr><td>401</td><td>Anu</td><td>22</td><td>9000</td></tr>
<tr><td>402</td><td>Shane</td><td>29</td><td>8000</td></tr>
<tr><td>403</td><td>Rohan</td><td>34</td><td>6000</td></tr>
<tr><td>404</td><td>Scott</td><td>44</td><td>10000</td></tr>
<tr><td>405</td><td>Tiger</td><td>35</td><td>8000</td></tr>
</table>
<p>SQL query will be,</p>
<pre>
SELECT LAST(salary) from emp;
</pre>
<p>Result of the above query will be,</p>
<table class="table table-bordered table-striped">
<tr><th>last(salary)</th></tr>
<tr><td>8000</td></tr>
</table>
<hr/>


<h4>5) MAX()</h4>
<p> MAX function returns maximum value from selected column of the table.</p>
<p>Syntax of MAX function is,</p>
<pre>
SELECT <b>MAX</b>(column_name) from <i>table-name</i>
</pre>
<hr/>
<h4>Example of MAX()</h4>
<p>Consider following <b>Emp</b> table</p>
<table class="table table-bordered table-striped">
<tr><th>eid</th><th>name</th><th>age</th><th>salary</th></tr>
<tr><td>401</td><td>Anu</td><td>22</td><td>9000</td></tr>
<tr><td>402</td><td>Shane</td><td>29</td><td>8000</td></tr>
<tr><td>403</td><td>Rohan</td><td>34</td><td>6000</td></tr>
<tr><td>404</td><td>Scott</td><td>44</td><td>10000</td></tr>
<tr><td>405</td><td>Tiger</td><td>35</td><td>8000</td></tr>
</table>
<p>SQL query to find Maximum salary is,</p>
<pre>
SELECT MAX(salary) from emp;
</pre>
<p>Result of the above query will be,</p>
<table class="table table-bordered table-striped">
<tr><th>MAX(salary)</th></tr>
<tr><td>10000</td></tr>
</table>
<hr/>




<h4>6) MIN()</h4>
<p> MIN function returns minimum value from a selected column of the table.</p>
<p>Syntax for MIN function is,</p>
<pre>
SELECT <b>MIN</b>(column_name) from <i>table-name</i>
</pre>
<hr/>
<h4>Example of MIN()</h4>
<p>Consider following <b>Emp</b> table,</p>
<table class="table table-bordered table-striped">
<tr><th>eid</th><th>name</th><th>age</th><th>salary</th></tr>
<tr><td>401</td><td>Anu</td><td>22</td><td>9000</td></tr>
<tr><td>402</td><td>Shane</td><td>29</td><td>8000</td></tr>
<tr><td>403</td><td>Rohan</td><td>34</td><td>6000</td></tr>
<tr><td>404</td><td>Scott</td><td>44</td><td>10000</td></tr>
<tr><td>405</td><td>Tiger</td><td>35</td><td>8000</td></tr>
</table>
<p>SQL query to find minimum salary is,</p>
<pre>
SELECT MIN(salary) from emp;
</pre>
<p>Result will be,</p>
<table class="table table-bordered table-striped">
<tr><th>MIN(salary)</th></tr>
<tr><td>8000</td></tr>
</table>
<hr/>

<h4>7) SUM()</h4>
<p> SUM function returns total sum of a selected columns numeric values. </p>
<p>Syntax for SUM is,</p>
<pre>
SELECT SUM(column_name) from <i>table-name</i>
</pre>
<hr/>
<h4>Example of SUM()</h4>
<p>Consider following <b>Emp</b> table</p>
<table class="table table-bordered table-striped">
<tr><th>eid</th><th>name</th><th>age</th><th>salary</th></tr>
<tr><td>401</td><td>Anu</td><td>22</td><td>9000</td></tr>
<tr><td>402</td><td>Shane</td><td>29</td><td>8000</td></tr>
<tr><td>403</td><td>Rohan</td><td>34</td><td>6000</td></tr>
<tr><td>404</td><td>Scott</td><td>44</td><td>10000</td></tr>
<tr><td>405</td><td>Tiger</td><td>35</td><td>8000</td></tr>
</table>
<p>SQL query to find sum of salaries will be,</p>
<pre>
SELECT SUM(salary) from emp;
</pre>
<p>Result of above query is,</p>
<table class="table table-bordered table-striped">
<tr><th>SUM(salary)</th></tr>
<tr><td>41000</td></tr>
</table>
<hr/>

<h4>Scalar Functions</h4>
<p>Scalar functions return a single value from an input value. Following are soe frequently used Scalar Functions.</p>
<hr/>

<h4>1) UCASE()</h4>
<p> UCASE function is used to convert value of string column to Uppercase character.</p>
<p>Syntax of UCASE,</p>
<pre>
SELECT <b>UCASE</b>(column_name) from <i>table-name</i>
</pre>
<hr/>
<h4>Example of UCASE()</h4>
<p>Consider following <b>Emp</b> table</p>
<table class="table table-bordered table-striped">
<tr><th>eid</th><th>name</th><th>age</th><th>salary</th></tr>
<tr><td>401</td><td>anu</td><td>22</td><td>9000</td></tr>
<tr><td>402</td><td>shane</td><td>29</td><td>8000</td></tr>
<tr><td>403</td><td>rohan</td><td>34</td><td>6000</td></tr>
<tr><td>404</td><td>scott</td><td>44</td><td>10000</td></tr>
<tr><td>405</td><td>Tiger</td><td>35</td><td>8000</td></tr>
</table>
<p>SQL query for using UCASE is,</p>
<pre>
SELECT UCASE(name) from emp;
</pre>
<p>Result is,</p>
<table class="table table-bordered table-striped">
<tr><th>UCASE(name)</th></tr>
<tr><td>ANU</td></tr>
<tr><td>SHANE</td></tr>
<tr><td>ROHAN</td></tr>
<tr><td>SCOTT</td></tr>
<tr><td>TIGER</td></tr>
</table>
<hr/>





<h4>2) LCASE()</h4>
<p> LCASE function is used to convert value of string column to Lowecase character. </p>
<p>Syntax for LCASE is,</p>
<pre>
SELECT <b>LCASE</b>(column_name) from <i>table-name</i>
</pre>
<hr/>
<h4>Example of LCASE()</h4>
<p>Consider following <b>Emp</b> table</p>
<table class="table table-bordered table-striped">
<tr><th>eid</th><th>name</th><th>age</th><th>salary</th></tr>
<tr><td>401</td><td>anu</td><td>22</td><td>9000</td></tr>
<tr><td>402</td><td>shane</td><td>29</td><td>8000</td></tr>
<tr><td>403</td><td>rohan</td><td>34</td><td>6000</td></tr>
<tr><td>404</td><td>scott</td><td>44</td><td>10000</td></tr>
<tr><td>405</td><td>Tiger</td><td>35</td><td>8000</td></tr>
</table>
<p>SQL query for converting string value to Lower case is,</p>
<pre>
SELECT LCASE(name) from emp;
</pre>
<p>Result will be,</p>
<table class="table table-bordered table-striped">
<tr><th>LCASE(name)</th></tr>
<tr><td>anu</td></tr>
<tr><td>shane</td></tr>
<tr><td>rohan</td></tr>
<tr><td>scott</td></tr>
<tr><td>tiger</td></tr>
</table>
<hr/>




<h4>3) MID()</h4>
<p> MID function is used to extract substrings from column values of string type in a table.</p>
<p>Syntax for MID function is,</p>
<pre>
SELECT <b>MID</b>(column_name, start, length) from <i>table-name</i>
</pre>
<hr/>
<h4>Example of MID()</h4>
<p>Consider following <b>Emp</b> table</p>
<table class="table table-bordered table-striped">
<tr><th>eid</th><th>name</th><th>age</th><th>salary</th></tr>
<tr><td>401</td><td>anu</td><td>22</td><td>9000</td></tr>
<tr><td>402</td><td>shane</td><td>29</td><td>8000</td></tr>
<tr><td>403</td><td>rohan</td><td>34</td><td>6000</td></tr>
<tr><td>404</td><td>scott</td><td>44</td><td>10000</td></tr>
<tr><td>405</td><td>Tiger</td><td>35</td><td>8000</td></tr>
</table>
<p>SQL query will be,</p>
<pre>
select MID(name,2,2) from emp;
</pre>
<p>Result will come out to be,</p>
<table class="table table-bordered table-striped">
<tr><th>MID(name,2,2)</th></tr>
<tr><td>nu</td></tr>
<tr><td>ha</td></tr>
<tr><td>oh</td></tr>
<tr><td>co</td></tr>
<tr><td>ig</td></tr>
</table>
<hr/>





<h4>4) ROUND()</h4>
<p> ROUND function is used to round a numeric field to number of nearest integer. It is used on Decimal point values. Syntax of Round function is,</p>
<pre>
SELECT <b>ROUND</b>(column_name, decimals) from <i>table-name</i>
</pre>
<hr/>
<h4>Example of ROUND()</h4>
<p>Consider following <b>Emp</b> table</p>
<table class="table table-bordered table-striped">
<tr><th>eid</th><th>name</th><th>age</th><th>salary</th></tr>
<tr><td>401</td><td>anu</td><td>22</td><td>9000.67</td></tr>
<tr><td>402</td><td>shane</td><td>29</td><td>8000.98</td></tr>
<tr><td>403</td><td>rohan</td><td>34</td><td>6000.45</td></tr>
<tr><td>404</td><td>scott</td><td>44</td><td>10000</td></tr>
<tr><td>405</td><td>Tiger</td><td>35</td><td>8000.01</td></tr>
</table>
<p>SQL query is,</p>
<pre>
SELECT ROUND(salary) from emp;
</pre>
<p>Result will be,</p>
<table class="table table-bordered table-striped">
<tr><th>ROUND(salary)</th></tr>
<tr><td>9001</td></tr>
<tr><td>8001</td></tr>
<tr><td>6000</td></tr>
<tr><td>10000</td></tr>
<tr><td>8000</td></tr>
</table>
<hr/>





<div>
<ul class="pager">
<li class="previous">
<a href="sql-constraints.php">&larr; Prev</a>
</li>
<li class="next">
<a href="joining-in-sql.php">Next &rarr;</a>
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