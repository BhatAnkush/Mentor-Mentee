<?php 
include('../action.php');

?>
<!DOCTYPE html>
<html lang="en">
<style>
        .main{
            display:flex;
            align-items:center;
            justify-content:center;
            height:100vh;
            background-image: url(../img/sahyadri.jpg);
            background-repeat:no-repeat;
            background-size: cover;
        }

        .signup-form{
            display:flex;
            align-items:center;
            justify-content:center;
            background-color:white;
            width: 310px;
            height:402px;
            flex-direction:column;
            border-radius: 20px;
        }
        input{
            border: none;
            outline: none;
            border-bottom: 2px solid #199EB8;
}
        .form-group{
            margin-bottom: 20px;
        }
        .submit{
            background-color: #199EB8;
    font-family: "Roboto", Helvetica, Arial, sans-serif;
    color: #fff;
    padding: 8px 22px;
    border-radius: 50px;
    cursor:pointer;
        }


    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> SCEM</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form">
                    <h2> 2nd Internal Marks </h2>
                     <div class="form-group">
                        <input type="text" class="form-input" name="usn" id="name" placeholder="USN"/>
                    </div>
                     <div class="form-group">
                        <input type="number" class="form-input" name="sub1" id="name" placeholder="Subject 1: Marks"/>
                    </div>
                     <div class="form-group">
                        <input type="number" class="form-input" name="sub2" id="name" placeholder="Subject 2: Marks"/>
                    </div>
                     <div class="form-group">
                        <input type="number" class="form-input" name="sub3" id="name" placeholder="Subject 3: Marks"/>
                    </div>
                     <div class="form-group">
                        <input type="number" class="form-input" name="sub4" id="name" placeholder="Subject 4: Marks"/>
                    </div>
                     <div class="form-group">
                        <input type="number" class="form-input" name="sub5" id="name" placeholder="Subject 5: Marks"/>
                    </div>
                     <div class="form-group">
                        <input type="number" class="form-input" name="sub6" id="name" placeholder="Subject 6: Marks"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="ia2" id="submit" class="form-submit submit" value="Submit"/>
                        
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>