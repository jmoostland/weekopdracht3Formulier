<?php

//$fh = fopen("testfile.txt", 'w') or die("Failed to create file");

//echo "<pre>";
//echo file_get_contents("index.php");
//echo"</pre>";
echo "Gender: ".$_POST ["gender"]."<br>";
echo "Name: ".$_POST ["name"]."<br>";
echo "Birthday: ".$_POST ["bday"]."<br>";
echo "Email: ".$_POST ["email"]."<br>";
echo "Eyes: ".$_POST ["eyes"]."<br>";
echo "Favcolor: ".$_POST ["favcolor"]."<br>";
echo "City: ".$_POST ["city"]."<br>";
echo "Question: ".$_POST ["question"]."<br>";

$gender = $_POST["gender"];
$name = $_POST["name"];
$bday = $_POST["bday"];
$email = $_POST["email"];
$eyes = $_POST["eyes"];
$favcolor = $_POST["favcolor"];
$city = $_POST["city"];
$question = $_POST["question"];

$myfile= fopen("testfile.txt", "w") or die ("Unable to open file.");
fwrite($myfile, $gender);
fwrite($myfile, "\n");
fwrite($myfile, $name);
fwrite($myfile, "\n");
fwrite($myfile, $bday);
fwrite($myfile, "\n");
fwrite($myfile,$email);
fwrite($myfile, "\n");
fwrite($myfile,$eyes);
fwrite($myfile, "\n");
fwrite($myfile,$favcolor);
fwrite($myfile, "\n");
fwrite($myfile, $city);
fwrite($myfile, "\n");
fwrite($myfile, $question);


//fwrite($fh, "w") or die("Could not write the file");
//fclose($fh);
//echo "File 'testfile.txt' written successfully";
?>