<?php

echo "Gender: " . $_POST ["gender"] . "<br>";
echo "Name: " . $_POST ["name"] . "<br>";
echo "Birthday: " . $_POST ["bday"] . "<br>";
echo "Email: " . $_POST ["email"] . "<br>";
echo "Eyes: " . $_POST ["eyes"] . "<br>";
echo "Favorite Color: " . $_POST ["favcolor"] . "<br>";
echo "Favorite City: " . $_POST ["city"] . "<br>";
echo "Question: " . $_POST ["question"] . "<br>";

$gender = $_POST["gender"];
$name = $_POST["name"];
$bday = $_POST["bday"];
$email = $_POST["email"];
$eyes = $_POST["eyes"];
$favcolor = $_POST["favcolor"];
$city = $_POST["city"];
$question = $_POST["question"];

$gegevens = array($gender, $name, $bday, $email, $eyes, $favcolor, $city, $question);
$myfile = fopen("testfile.txt", "w") or die("Unable to open file.");
foreach ($gegevens as $key => $value) {
    fwrite($myfile, $value . "\n");
}
fclose($myfile);
?>