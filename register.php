<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<style type="text/css">
.glass
{
background:transparent;
border:2px solid rgb(0,0,0,0.5);
width:500px;
height:400px;
position:absolute;
top:20%;
left:60%;
color:white	;
font-family: 'Sego UI', Tahoma, Geneva, Verdana, sans-serif;
z-index:1;
}
.glass{
position:absolute;
top:48%;
left:78%;
transform:translate(-40%,-40%);
box-sizing:border-box;
transation:.5s;
border-radius:5px;
background:transparent;
box-shadow:0 10px 20px rgba(0,0,0,30);
width:380px;
height:580px;
z-index:1;
padding:25px;
font-family: 'Voces', cursive;
font-style: italic;
}
.register
{
background:blue;
border:#345b36 2px;
color:white;
margin:2px 3px;
padding:14px 17px;
border-radius:10px 10px;
z-index:2;
font-size:15px;
}
.inp{
width:300px;
height:30px;
font-size:15px;
font-family: 'Voces', cursive;
font-style: italic;
}
.overlay{

height:100vh;
position:absolute;
top:0;
width: 100vw;
left:0;
background:#225470;
z-index:1;
opacity: 0.65;
z-index:0;
}
.d{color:red;}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.img
{
position:absolute;
top:0;
left:0;
width:100vw;
height:100vh;
overflow:hidden;
}
.f{color:white;
z-index:3;
}
.g
{
font-family: 'Voces', cursive;
position:absolute;
font-style: italic;
top:3%;
left:8%;
color:white;
font-size:50px;
z-index:1;
}
blockquote {
font-family: 'Voces', cursive;
font-size: 18px;
font-style: italic;
width: 350px;
height:180px;
padding:40px;
margin: 0.25em 0;
padding: 0.25em 40px;
line-height: 1.45;
border-radius:25px 25px;
color: #383838;
text-indent:20px;
position:absolute;
top:40%;
left:15%;
background:#4d94ce;
color:white;
opacity: 0.9;
box-shadow:0 10px 20px rgba(0,0,0,30);
}
blockquote:before {
display: block;
content: "\201C";
font-size: 80px;
position: absolute;
left: 10px;
top: 30px;
color: white;
opacity: 1;
}
blockquote cite:before {
content: "\2014 \2009";
opacity: 1;
}
blockquote cite {
color: #66696C;
font-size: 14px;
display: block;
margin-top: 5px;
color:white;
opacity: 1;
}
blockquote:after {
display: block;
content: "\201C";
font-size: 80px;
position: absolute;
left: 220px;
top: 60px;
color: white;
opacity: 1;
}
.frm1{margin:5px;}
</style>
<script>
function f()
{
var user=document.getElementById("u");
var pass=document.getElementById("p");
var con=document.getElementById("cp");
var email=document.getElementById("ei");
var occu=document.getElementById("oc");
if(user.value.length==0||email.value.length==0||occu.value.length==0)
{
alert("Data is not sufficient to register");
}
else if((pass.value.length!=8)||(pass.value!=con.value))
{
alert("Entered password is not matching");
}
else
{
var frm=document.getElementById("frm1");
frm.setAttribute("action","ins.php");
}

}
function r()
{
var frm=document.getElementById("frm1");
frm.setAttribute("action","login.php");}
</script>
</head>
<body>

<img src="assets/images/mbr-1631x1080.jpg" class="img"/>


<h1 class="g">Welcome to Registration</h1>
<div class="r">

<div class="glass">

<form method="post" action="ins.php" id="frm1"class="frm1">

Enter the User:&nbsp&nbsp<br><input type="textbox" name="name"  class="inp" id="u" placeholder="Enter the Name"/><span class="d">*</span><br><br>
	
Enter the age:&nbsp&nbsp<br><input type="textbox" name="age" class="inp" id="p" placeholder="Enter the age"/><span class="d">*</span><br><br>

Enter the hiredate:<br><input type="textbox" name="date"  class="inp" id="cp" placeholder="Enter the hiredate"/><span class="d">*</span><br><br>

Enter the gender:&nbsp&nbsp<br><input type="textbox" name="gender" class="inp" id="ei" placeholder="Enter the gender"/><span class="d">*</span><br><br>
Enter the address:<br><input type="textbox" name="address" class="inp" id="oc" placeholder="Enter the address"/><span class="d">*</span><br><br>
Enter the contact:&nbsp&nbsp<br><input type="textbox" name="contact" class="inp" id="ei" placeholder="Enter the contact"/><span class="d">*</span><br><br>
Enter the salary:<br><input type="textbox" name="salary" class="inp" id="oc" placeholder="Enter the salary"/><span class="d">*</span><br><br>


&nbsp&nbsp<a href="ins.php"><input type="submit" name="register" value="Register" class="register" class="inp "   /></a>

</form>
 <button class="button" id="myBtn1" style="vertical-align:middle" onclick="location.href='login.php'"><span>login </span></button>
</div>	
<div>
</body>
</html>

