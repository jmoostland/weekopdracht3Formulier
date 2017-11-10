
<html>
    <head>
        <script>

//
//            function loadXMLDoc() {                                           //alleen nodig om het op dezelfde pagina te laten zien, werkte prima
//                var template = document.getElementById("pizza").value;
//                var xhttp = new XMLHttpRequest();
//                xhttp.onreadystatechange = function () {
//                    if (this.readyState == 4 && this.status == 200) {
//                        document.getElementById("demo").innerHTML =
//                                this.responseText;
//                    }
//                    function myFunction() {                                       //poging om op dezelfde pagina een afbeelding te laten verschijnen
//                        var x = document.getElementById("myFile").autofocus;
//                       var xhttp = new XMLHttpRequest();
//                       xhttp.onreadystatechange = function () {
//                    if (this.readyState == 4 && this.status == 200) {
//                        document.getElementById("profiel").innerHTML = x;
//
////                        
////                        
//////                        document.getElementById("profiel").innerHTML;
//                    }
//                };
//
//                xhttp.open("GET", "http://localhost/formulierWeekopdracht/index.php?pizza" + template, true); //alleen nodig om het op dezelfde webpagina te laten zien
//                xhttp.send();
//            }





        </script>

        <style>



            h1 {
                font-family:Georgia;
                font-size:30px;
                color:white;
            }

            body {
                font-family:Georgia;
                background-color: #666666;
                background-image:url("bureau.jpg");
                background-repeat:no-repeat;
                background-position:top right, 600px 0px;
                color: white;
            }

            select{
                font-family:Georgia;
                font-size: 15px;
                font-weight: bold;
            }

            input{
                font-family:Georgia;
                color:#000;
            }


        </style>

    </head>
    <body>


        <form action="testfile.php" method="post">
            <table cellspacing="2" cellpadding="2" border="0">

                <div id="demo"><h1>Join us</h1></div>
<!--                <tr>
                    <td><form action='index.php' method='post' enctype='multipart/form-data'>      poging bezoeker profielfoto
                            <label for="userfile">Profile picture:</label></td>
                    <td><input type="file" name="userfile"/>                                 weggehaald id="myFile"
                        <input type="submit" value='upload'/></form></td>                     weggehaald id="profiel"
                </tr> 
                <?php
                if ($_FILES) {
                    $name = $_FILES['userfile']['name'];
                    move_uploaded_file($_FILES ['userfile']['tmp_name'], $name);
                    echo "'$name'<br><img src='$name'";
                }
                echo "</body><html>";
                ?>-->


                <tr>
                    <td>Gender</td>
                    <td><label><input type="radio" name="gender" value="men">men</label>
                        <label><input type="radio" name="gender" value="women">women</label>
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td> <input type="text" name="name" size="35" placeholder="First and last name"><br></td>
                </tr>
                <tr>
                    <td>Birthday</td>
                    <td> <input type="date" name="bday" size="35"><br>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" size="35"placeholder="Email"><br></td>
                </tr>
                <tr>
                    <td>What is the color of your eyes?</td>
                    <td>
                        <select name="eyes">
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                            <option value="brown">Brown</option>
                            <option value="grey">Grey</option>
                        </select></td></tr>
                <tr>
                    <td>What is your favorite color?</td>
                    <td><input type="color" name="favcolor" value="#06f955"><br></td>
                </tr>
                <tr>
                    <td>What is your favorite city?</td>
                    <td> <input type="text" name="city" size="35"placeholder="Favorite city"><br></td>
                </tr>
                <br>

                <tr><td></td>
                    <td><br><textarea name="question" rows="5" cols="37" wrap="hard">What are the questions that made the biggest difference in your life?</textarea></td>
                </tr>        
                <tr>
                    <td> 
                    <td><input width="200px" type="image" src="fox.png" \*id="pizza" onclick="loadXMLDoc()"*\></td>
                </tr>
            </table>
        </form>

    </body>



</html>




