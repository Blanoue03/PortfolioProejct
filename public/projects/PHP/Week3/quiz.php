
<?php
$name = $_POST["name"];
$answers = [$_POST["q1"],$_POST["q2"],$_POST["q3"],$_POST["q4"],$_POST["q5"]];
$score = 0;

echo("$name, here are your quiz results<br />");
if($answers[0] == "c") 
{
    echo("CORRECT Answer! The PHP Developer's Group Web Site is www.php.net.<br />");
    $score++;
}
else
{
    echo("WRONG Answer! The PHP Developer's Group Web Site is www.php.net.<br />");
}
if($answers[1] == "d") 
{
    echo("CORRECT Answer! PHP documents use the .php extension.<br />");
    $score++;
}
else
{
    echo("WRONG Answer! PHP documents use the .php extension.<br />");
}
if($answers[2] == "a") 
{
    echo("CORRECT Answer! PHP stands for PHP: Hypertext Preprocessor.<br />");
    $score++;
}
else
{
    echo("WRONG Answer! PHP stands for PHP: Hypertext Preprocessor.<br />");
}
if($answers[3] == "b") 
{
    echo("CORRECT Answer! PHP statements should be closed with a semicolon (;).<br />");
    $score++;
}
else
{
    echo("WRONG Answer! PHP statements should be closed with a semicolon (;).<br />");
}
if($answers[4] == "a") 
{
    echo("CORRECT Answer! The default HTTP method is GET.<br />");
    $score++;
}
else
{
    echo("WRONG Answer! The default HTTP method is GET.<br />");
}
echo("$name, your score was $score out of 5.");
?>