<?php

//$fh = fopen("testfile.txt", 'w') or die("Failed to create file");

//echo "<pre>";
//echo file_get_contents("index.php");
//echo"</pre>";
echo "Gender:".$_POST ["gender"]."<br>";
echo "Name:".$_POST ["name"]."<br>";
echo "Email:".$_POST ["email"]."<br>";
echo "City:".$_POST ["city"]."<br>";
echo "Question:".$_POST ["question"]."<br>";


$name = $_POST["name"];
$email = $_POST["email"];
$city = $_POST["city"];
$question = $_POST["question"];

//$myfile = "Name: " . $_POST['name'];
//save($name, $myfile);
//$var1 = "Email: " . $_POST['email'];
//save($email, $var1);
//$var1 = "City: " . $_POST['city'];
//save($city, $var1);
//$var1 = "Question: " . $_POST['question'];
//save($question, $var1);

$myfile= fopen("testfile.txt", "w") or die ("Unable to open file.");
fwrite($myfile, $name);
fwrite($myfile,$email);
fwrite($myfile, $city);
fwrite($myfile, $question);
fclose($myfile);


//function save($var1, $var2) {
//    $fh = fopen($var1 . "testfile.txt", 'a+');
//    fwrite($fh, "\n");
//    fwrite($fh, $var2);
//    fwrite($fh, ";");
//    fclose($fh);
//}

//fwrite($fh, "w") or die("Could not write the file");
//fclose($fh);
//echo "File 'testfile.txt' written successfully";
?>