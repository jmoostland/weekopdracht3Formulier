
<html>
    <head>
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
                <tr>

                <form method='post' action='index.php' enctype='multipart/form-data'>
                    <td>Select File</td>
                    <td><input type='file' name='filename' size='5'>
                </form>
                </td>

                <?php
                if ($_FILES) {
                    $filename = $_FILES['filename']['name'];
                    move_uploaded_file($_FILES['filename']['tmp_name'], $filename);
                    echo "Uploaded image '$filename'<br><img src='$filename'>";
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
                    <td> <input type="text" name="name" size="35" placeholder="First and last name"><br></td>
                </tr>
                <tr>
                    <td>Birthday</td>
                    <td> <input type="date" name="bday" size="35" \*required*\><br>
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

                <tr>
                    <td colspan="2" align="right"><br><textarea name="question" rows="5" cols="40" wrap="hard">What are the questions that made the biggest difference in your life?</textarea></td>
                </tr>        
                <tr>
                    <td> 
                    <td><input width="200px" type="image" src="fox.png"></td>
                </tr>
            </table>
        </form>

    </body>

</html>




