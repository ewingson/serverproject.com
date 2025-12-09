<!-- Location: /example/index.php -->
<!DOCTYPE html>
<html>
<head>
<title>browsertitelzeile</title>
</head>
<body>
<!--dies ist ein html-kommentar-->
<p>hier k&ouml;nnte 'hello world' stehen...</p>
<a href = 'https://selfhtml.org/'>hier selfhtml at https://selfhtml.org/</a><br />
<!--erste adressierungsart-->
<a href = 'https://www.serverproject.de/example/etc/freax/files/'>./etc/freax/files/ {([one])}</a><br />
<!--zweite adressierungsart-->
<a href = '/example/etc/freax/files/'>./etc/freax/files/ {([two])}</a><br />
<!--dritte adressierungsart-->
<a href = './etc/freax/files/'>./etc/freax/files/ {([three])}</a><br />
<!--vierte adressierungsart-->
<a href = 'etc/freax/files/'>./etc/freax/files/ {([four])}</a><br />
<a href = '../draft/'>back</a><br />
<hr /><br />
<?php
/*dies ist ein php-kommentar*/
$file = './index.php';
$code = highlight_file ($file, $return = true);
echo $code;
?>
</body>
</html>
