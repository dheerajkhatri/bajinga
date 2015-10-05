<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>File Handling in C Language | C Language Tutorial | Studytonight</title>
<meta name="description" content="C Language provides functions like fopen, fread, fwrite, fseek to make file Handling in C language simple. Lets learn How to Open a file, close a file, read a file and write a file in C Language.">
<meta name="keywords" content="C language, C notes, C array, c datatype, c decision making, c error handling, c file handling, C functions, c loops, c memory allocation, c operators, C pointers, C structure, c typedef"/>

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
<a href="file-input-output.php#" id="slide-toggle-sidebar"><span class="pull-right"><img src="../css/resource/collapsed-menu.png" alt="Menu"/></span><span>SEE THE INDEX</span></a>
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
<h3>File Handling in C Language</h3>
<p>
A <b>file</b> represents a sequence of bytes on the disk where a group of related data is stored. File is created for permanent storage of data. It is a ready made structure.</p> 
<p>In C language, we use a structure <b>pointer of file type</b> to declare a file.</p>
<pre>
FILE <b>*fp</b>;
</pre> 
<p>C provides a number of functions that helps to perform basic file operations. Following are the functions,</p>
<table class="table table-bordered table-striped">
<tr><th>Function</th><th>description</th></tr>
<tr><td>fopen()</td><td>create a new file or open a existing file</td></tr>
<tr><td>fclose()</td><td>closes a file</td></tr>
<tr><td>getc()</td><td>reads a character from a file</td></tr>
<tr><td>putc()</td><td>writes a character to a file</td></tr>
<tr><td>fscanf()</td><td>reads a set of data from a file</td></tr>
<tr><td>fprintf()</td><td>writes a set of data to a file</td></tr>
<tr><td>getw()</td><td>reads a integer from a file</td></tr>
<tr><td>putw()</td><td>writes a integer to a file</td></tr>
<tr><td>fseek()</td><td>set the position to desire point</td></tr>
<tr><td>ftell()</td><td>gives current position in the file</td></tr>
<tr><td>rewind()</td><td>set the position to the begining point</td></tr>
</table>  

<hr/>
<h4>Opening a File or Creating a File</h4>
<p>
The <code>fopen()</code> function is used to create a new file or to open an existing file.</p> 
<p><b>General Syntax :</b></p>
<pre>
*fp = FILE <b>*fopen</b>(const char <i>*filename</i>, const char <i>*mode</i>);
</pre>
<p>Here <b>filename</b> is the name of the file to be opened and <b>mode</b> specifies the purpose of opening the file. Mode can be of following types,</p><p><b>*fp</b> is the FILE pointer (<code>FILE *fp</code>), which will hold the reference to the opened(or created) file.</p>
<table class="table table-bordered table-striped">
<tr><th>mode</th><th>description</th></tr>
<tr><td>r</td><td>opens a text file in reading mode</td></tr>
<tr><td>w</td><td>opens or create a text file in writing mode.</td></tr>
<tr><td>a</td><td>opens a text file in append mode</td></tr>
<tr><td>r+</td><td>opens a text file in both reading and writing mode</td></tr>
<tr><td>w+</td><td>opens a text file in both reading and writing mode</td></tr>
<tr><td>a+</td><td>opens a text file in both reading and writing mode</td></tr>
<tr><td>rb</td><td>opens a binary file in reading mode</td></tr>
<tr><td>wb</td><td>opens or create a binary file in writing mode</td></tr>
<tr><td>ab</td><td>opens a binary file in append mode</td></tr>
<tr><td>rb+</td><td>opens a binary file in both reading and writing mode</td></tr>
<tr><td>wb+</td><td>opens a binary file in both reading and writing mode</td></tr>
<tr><td>ab+</td><td>opens a binary file in both reading and writing mode</td></tr>
</table>
</p>
<hr/>
<h4>Closing a File</h4>
<p>
The <code>fclose()</code> function is used to close an already opened file.</p> 
<p><b>General Syntax :</b></p>
<pre>
int <b>fclose</b>( FILE <i>*fp</i> );
</pre>
Here fclose() function closes the file and returns <b>zero</b> on success, or <b>EOF</b> if there is an error in closing the file. This <b>EOF</b> is a constant defined in the header file <b>stdio.h</b>.</p>
<hr/>
<h4>Input/Output operation on File</h4>
<p>
In the above table we have discussed about various file I/O functions to perform reading and writing on file. <code>getc()</code> and <code>putc()</code> are simplest functions used to read and write individual characters to a file.
<pre>
#include&lt;stdio.h&gt;
#include&lt;conio.h&gt;
main()
{
 FILE *fp;
 char ch;
 fp = <b>fopen</b>("<i>one.txt</i>", "<i>w</i>");
 printf("Enter data");
 while( (ch = getchar()) != EOF) {
    <b>putc</b>(ch,fp);
 }
 fclose(fp);
 fp = <b>fopen</b>("<i>one.txt</i>", "<i>r</i>");
 while( (ch = <b>getc</b>()) != EOF)
    printf("%c",ch);
 fclose(fp);
}
</pre> 
</p>
<hr/>
<h4>Reading and Writing from File using fprintf() and fscanf()</h4>
<p>
<pre>
#include&lt;stdio.h&gt;
#include&lt;conio.h&gt;
struct emp
{
   char name[10];
   int age;
};

void main()
{
   struct emp e;
   FILE *p,*q;
   p = <b>fopen</b>("<i>one.txt</i>", "<i>a</i>");
   q = <b>fopen</b>("<i>one.txt</i>", "<i>r</i>");
   printf("Enter Name and Age");
   scanf("%s %d", e.name, &e.age);
   <b>fprintf</b>(p,"%s %d", e.name, e.age);
   fclose(p);
   do
   {
      <b>fscanf</b>(q,"%s %d", e.name, e.age);
      printf("%s %d", e.name, e.age);
   }
   while( !feof(q) );
   getch();
}
</pre>
</p>
<p>In this program, we have create two FILE pointers and both are refering to the same file but in different modes. <b>fprintf()</b> function directly writes into the file, while <b>fscanf()</b> reads from the file, which can then be printed on console usinf standard <b>printf()</b> function.</p>
<hr/>
<h4>Difference between Append and Write Mode</h4>
<p>Write (w) mode and Append (a) mode, while opening a file are almost the same. Both are used to write in a file. In both the modes, new file is created if it doesn&apos;t exists already.</p>
<p>The only difference they have is, when you open a file in the write mode, the file is reset, resulting in deletion of any data already present in the file. While in append mode this will not happen. Append mode is used to append or add data to the existing data of file(if any). Hence, when you open a file in Append(a) mode, the cursor is positioned at the end of the present data in the file.</p>
<hr/>
<h4>Reading and Writing in a Binary File</h4>
<p>A Binary file is similar to the text file, but it contains only large numerical data. The Opening modes are mentioned in the table for opening modes above.</p>
<p><b>fread()</b> and <b>fwrite()</b> functions are used to read and write is a binary file.</p>
<pre>fwrite(data-element-to-be-written, size_of_elements, 
			number_of_elements, pointer-to-file);
</pre>
<p><b>fread()</b> is also used in the same way, with the same arguments like fwrite() function. Below mentioned is a simple example of writing into a binary file</p>
<pre>const char <b>*mytext</b> = "The quick brown fox jumps over the lazy dog";   
FILE *bfp= <b>fopen</b>("<i>test.txt</i>", "<i>wb</i>");   
if (bfp) {     
   <b>fwrite</b>(<i>mytext</i>, <i>sizeof(char)</i>, <i>strlen(mytext)</i>, <i>bfp</i>) ;     
   fclose(bfp) ;   
} 
</pre>
<hr/>
<h4>fseek(), ftell() and rewind() functions</h4>
<ul class="content">
<li><b>fseek()</b> - It is used to move the reading control to different positions using fseek function.</li>
<li><b>ftell()</b> - It tells the byte location of current position of cursor in file pointer.</li>
<li><b>rewind()</b> - It moves the control to beginning of the file.</li>
</ul>
<hr/>
<h4>Some File Handling Program Examples</h4>
<ul class="content">
<li><a class="orange" href="program-to-write-in-file.php">Create a File and Store Information in it</a></li>
<li><a class="orange" href="program-to-list-files-in-directory.php">List all the Files present in a Directory</a></li>
<li><a class="orange" href="program-to-find-size-of-file.php">Finding Size of a File</a></li>
<li><a class="orange" href="program-copy-file-to-another-file.php">Copy Content of one File into Another File</a></li>
<li><a class="orange" href="program-to-reverse-content-of-file.php">Reverse the Content of File and Print it</a></li>
</ul>
<hr/>
<div><ul class="pager">
<li class="previous">
<a href="pointer-with-function-in-c.php">&larr; Prev</a>
</li>
<li class="next">
<a href="error-handling-in-c.php">Next &rarr;</a>
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