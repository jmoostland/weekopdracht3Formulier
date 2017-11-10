
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
//                    function myFunction() {
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
                };

                xhttp.open("GET", "http://localhost/formulierWeekopdracht/index.php?pizza" + template, true);
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
                background-repeat:no-repeat;
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


        <form action="testfile.php" method="post">
            <table cellspacing="2" cellpadding="2" border="0">

                <div id="demo"><h1>Join us</h1></div>
    <!--            <tr>
                    <td><form action="#" method="post" enctype="multipart/form-data">
                            <label for="userfile">Profile picture:</label></td>
                    <td><input type="file" name="userfile" id="myFile" />
                        <input type="submit" id="profiel"/></form></td>
                </tr> -->
                <tr>
                    <td>Gender</td>
                    <td><label><input type="radio" name="gender" value="men">men</label>
                        <label><input type="radio" name="gender" value="women">women</label>
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td> <input type="text" name="name" size="35"><br></td>
                </tr><tr>
                    <td>Email</td>
                    <td><input type="text" name="email" size="35"><br></td>
                </tr><tr>
                    <td>What is the color of your eyes?</td>
                    <td>
                        <select name="eyes">
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                            <option value="brown">Brown</option>
                            <option value="grey">Grey</option>
                        </select></td></tr>
                <tr>
                    <td>What is your favorite city?</td>
                    <td> <input type="text" name="city" size="35"><br></td>
                </tr>
                <br>

                <tr><td></td>
                    <td><br><textarea name="question" rows="5" cols="30"></textarea></td>
                </tr>        
                <tr>
                    <td> 
                    <td><input width="200px" type="image" src="fox.png" id="pizza" onclick="loadXMLDoc()"></td>
                </tr>
            </table>
        </form>

    </body>



</html>




