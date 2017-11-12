
<html>
    <head>
        <script>


            function loadXMLDoc() {
                var template = document.getElementById("pizza").value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("demo").innerHTML =
                                this.responseText;

                    }
                };

                xhttp.open("GET", "http://localhost/PhpProject1/index.php?pizza" + template, true);
                xhttp.send();
            }


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
                background-repeat:repeat-y;
                background-position:top right, 600px 0px;
                color: white;
            }

            select{
                font-family:Georgia;
                font-size: 15px;
                font-weight: bold;
            }


        </style>

    </head>
    <body>
        <table cellspacing="2" cellpadding="2">

            <div id="demo"><h1>Join us</h1></div>

            <?php
            echo <<<_END

<tr><td><form method='post' action='afbeeldingUploadenOpEigenPagina.php' enctype='multipart/form-data'>
Select Photo: </td><td><input type='file' name='filename' size='10'>
<input type='image' src='fox.png' width="100px" value='Upload' align='center' >
</form>                </td> 

_END;

            if ($_FILES) {
                $name = $_FILES['filename']['name'];
                move_uploaded_file($_FILES['filename']['tmp_name'], $name);
                echo "Uploaded image '$name'<br><img src='$name' height=150px>";
            }
            ?>
        </tr>
        <tr>
            <td>Gender</td>
            <td><label><input type="radio" name="gender" value="men" required>men</label>
                <label><input type="radio" name="gender" value="women" required>women</label>
            </td>
        </tr>
        <tr>
            <td>Name</td>
            <td> <input type="text" name="name" size="35"><br></td>
        </tr>
        <tr>
            <td>Birthday</td>
            <td> <input type="date" name="bday" size="35" \*required*\><br>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" size="35"><br></td>
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
            <td> <input type="text" name="pet" size="35"><br></td>
        </tr>
        <br>
        <tr>
            <td colspan="2" align="left"><br><textarea name="question" rows="5" cols="35" wrap="hard">What are the questions that made the biggest difference in your life?</textarea></td>
                </tr>        
                <tr>
                    </td> 
            <td><input width="200px" type="image" src="fox.png" id="pizza" onclick="loadXMLDoc()"></td>
        </tr>
    </table>

</body>
</html>