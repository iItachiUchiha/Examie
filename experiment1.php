<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        p:hover {
            background-color: rgb(35, 67, 132);
            color: white;

        }
        
        p{
            
            padding:3px 20px;
            border-radius: 10px;
           }
           
           a{
            text-decoration: none;
            color: black;
           }

        * {
            margin: 0;
            padding: 0;
        }

        .header {
            height: 60px;
            background-color: rgb(35, 67, 132);
            color: white;
            padding-top: 21px;
            padding-bottom: 4px;
            text-align: center;
            background-image: url("logo.png");
            background-position: left;
            background-repeat: no-repeat;
            background-size: 80px 80px;
        }

        p {
            display: inline-block;
        }

        .homebar {
            background-color: white;
            height: 28px;
            word-spacing: 103px;
            font-size: 17px;
            padding-left: 117px;
            padding-top: 7px;
            position: sticky;
            top: 0px;
            box-shadow: 3px 0px 10px rgb(94, 93, 93);
        }

        .header2 {
            text-align: center;
            font-size: 35px;
            background-color: rgb(111, 196, 50);
            color: rgb(25, 9, 203);
            height: 60px;
            padding-top: 10px;
            word-spacing: 18px;
            background-image: url("wnload.jpg");
            background-position: left;
            background-repeat: no-repeat;
            background-size: 80px 80px;
        }


        p {
            display: inline-block;
        }
        #form{
            margin: auto;
            background-color: rgb(176, 161, 95);
            font-size: 17px;
            padding: 20px;

            
        }
        .oyo{
            text-align: center;
            
        }
        #box{
            width: 200px;
            height: 30px;
            border-radius: 15px;
            font-size: 0.9rem;
        }
        .php{
            text-align:center;
           /* background-color:rgb(176, 161, 95); */
           font-size:20px;
           
        }
        .table{
            padding: 20px;
            background-color:rgb(176, 161, 95);
            width: 50%;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>
            Temperature Converter
        </h2>
    </div>
   
    <br><br><br>
    <div class="php">
    <?php
   $tp=$_POST['temp'];
   $tf=(9/5)*$tp+32;
    echo"<div class=\"table\" align=\"center\" >";
    echo"<table>";
    echo"<tr><td width=\"40%\">temperature in ferenheit :-</td><td width=\"40%\">$tf</td></tr>";

    echo"</table>";
    echo"</div>";
    
    ?></div>
    </body>
    </html>