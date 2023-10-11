<?php
    if($_POST["message"]) {
        mail("william.allen.williams@gmail.com", "Derail Form Tester", $_POST["MSG: Contains Form Info?"]. "From: an@email.address");
    }
?>


<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Derail the Sale!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is the Site for Derail the Sale!">
    <!-- Author: William Williams 8-26-23 : CSS DISABLED -->
    <link rel="stylesheet" href="DerailSassy.css" type="text/css" media="all">
    <script src="https://kit.fontawesome.com/b0e79bd480.js" crossorigin="anonymous"></script>
    <!-- [if lt IE 9] -->
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!--jQuery-->
    <script>
        $(document).ready(function() {
            $("#header-nav").load("header-nav.html #header-nav-load");
            $("#footer-here").load("header-nav.html #footer-load");
        });
    </script>
</head>
<!-- HOME PAGE -->

<body>

<div id="header-nav"></div>

    <main>
        <h2>Form</h2>
        <h3>Input sent to infor@derailthesale.com</h3>
        <section>
            <form>
                <form method="post" action="subscriberform.php">
                    <!-- send to email -->
                    <label for="first-name">First name:</label>
                    <input type="text" id="first-name" name="first-name" value="Thomas"><br>
                    <label for="last-name">Last name:</label>
                    <input type="text" id="last-name" name="last-name" value="Tank Engine"><br>

                    <p>drop down options:</p>
                    <select name="options" id="options">
                        <option value="option_1">option_1</option>
                        <option value="option_2">option_2</option>
                        <option value="option_3">option_3</option>
                        <option value="option_4">option_4</option>
                    </select>
                    <p>radio buttons</p>
                    <input type="radio" id="button_1" name="radio-buttons" value="button_1">
                    <label for="button_1">button_1</label>
                    <input type="radio" id="button_2" name="fav_language" value="button_2" checked="checked">
                    <label for="button_2">button_2</label>
                    <input type="radio" id="button_3" name="fav_language" value="button_3">
                    <label for="button_3">button_3</label>
                    <p>check boxes</p>
                    <input type="checkbox" name="check_1" value="check_1">
                    <label for="check_1">this is for check_1</label>
                    <input type="checkbox" name="check_2" value="check_2">
                    <label for="check_2">this is for check_2</label>
                    <input type="checkbox" name="check_3" value="check_3" checked>
                    <label for="check_3">this is for check_3</label>
                    <br>



                    <input type="submit" value="Submit">


                </form>
            </form>
        </section>

    </main>

    <div id="footer-here"></div>

    <script src="menu_script.js"></script>
</body>

</html>