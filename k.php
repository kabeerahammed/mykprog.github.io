<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body,h1
{
	margin:0px;
	padding:0px;
	background:#CF6;
}

h2
{
	font-size:24px;
	color:#F00;
}
.box
{
	background:#0FF;
	left:40%;
	top:400px;
	width:500px;
	height:auto;
}
.container
{ 
	width:100%;
	margin-top:0px;
	padding:0px;
	height:auto;
}
.name
{

	width:40%;
	height:50px;
	background-color:#090;
}
.menu
{
     background-color:#606;
	 margin-left:40%;
	 top:0px;
     width:60%;
	 position:absolute;
     height:50px;
}
ul
{
	list-style-type:none;
	margin:0px;
	padding:0px;
	overflow:hidden;
}
li
{
    float:left;
}
li a
{
	
    display:block;
	text-align:center;
	color:#FFF;
	text-decoration:none;
	padding:16px 24px;
}
.active
{
	background-color:#0F9;
}
li a:hover:not(.active)
{
	color:#FF0;
	background-color:#F03;
	text-shadow:0px 3px 3px red;
	border-radius:10px;
	box-shadow:0px 0px 100px red;
}

h1
{
	color:#006;
	font:"Courier New", Courier, monospace;
	text-align:center;
	font-size:30px;
	letter-spacing:20px;
	line-height:70px;
	text-shadow:0px 3px 3px black;
}


</style>
</head>

<body>
<div class="container">
<div class="name"><h1>Kabeers'page</h1></div>
<div class="menu">
<ul><li><a href="#" class="active">
home</a></li><li><a href="#">
menu</a></li>
<li><a href="#">booking</a></li>
<li><a href="#">contact</a></li>
</ul>
<div class="box">
<h1> AUTO Calculator</h1>
<form method="post" action="b.php">
<h2>Enter your first value</h2>
	<input type="text" name="v1" />
    <br />
    <h2>Enter your Second value</h2>
    	<input type="text" name="v2" />
        <input type="submit" value="Calculate"  name="cal"/>
</form>
</div>
</div>
</div>
</body>
</html>
