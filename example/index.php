<!-- Location: /example/index.php -->
<!DOCTYPE html>
<html>
<head>
<title>browsertitelzeile</title>
</head>
<body>
<style>
a:hover {color: red;}
a
{
color: blue;
text-decoration-line: underline;
text-decoration-color: red;
}
body {
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
color: black;
}
.button {
  background-color: #0d47a1;
  color: #ffffff;
  border: 1px solid #0d47a1;
  border-radius: 5px;
  padding: 0.5em;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
}
.button:hover {
  background-color: #1266e2;
  border-color: #1266e2;
}
</style>
<div align = "center">
<a href = "https://www.serverproject.com/"><button class = "button" id = "one">home</button></a>
<a href = "https://www.serverproject.com/example/"><button class = "button" id = "two">example</button></a>
<a href = "https://www.serverproject.com/solid/"><button class = "button" id = "three">solid</button></a>
<a href = "https://www.serverproject.com/links/"><button class = "button" id = "four">links</button></a>
<a href = "https://www.serverproject.com/sites/"><button class = "button" id = "five">sites</button></a>
<a href = "https://www.serverproject.com/socials/"><button class = "button" id = "six">socials</button></a>
<a href = "https://www.serverproject.com/contact/"><button class = "button" id = "seven">contact</button></a>
</div>
<!--dies ist ein html-kommentar-->
<p>hier k&ouml;nnte 'hello world' stehen...</p>
<a href = 'https://selfhtml.org/'>hier selfhtml at https://selfhtml.org/</a><br />
<!--erste adressierungsart-->
<a href = 'https://www.serverproject.com/example/etc/freax/files/'>./etc/freax/files/ {([one])}</a><br />
<!--zweite adressierungsart-->
<a href = '/example/etc/freax/files/'>./etc/freax/files/ {([two])}</a><br />
<!--dritte adressierungsart-->
<a href = './etc/freax/files/'>./etc/freax/files/ {([three])}</a><br />
<!--vierte adressierungsart-->
<a href = 'etc/freax/files/'>./etc/freax/files/ {([four])}</a><br />
<hr />
<?php
/*dies ist ein php-kommentar*/
$file = './index.php';
$code = highlight_file ($file, $return = true);
echo $code;
?>
<hr /">
<div align = "center"><a href = "https://github.com/ewingson/serverproject.com">code</a></div>
</body>
</html>
