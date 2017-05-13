<?php
session_start();
?>
<!DOCTYPE html>
<!--
Copyright (C) 2017 RTG

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> CreatorsHangout's Login Page </title>
    </head>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        
        input {
            text-align: center;
        }
        
        button[type=submit] {
            color: black;
        }
        
    </style>
    <body>
        
        <nav class="navbar navbar-default">
            
            <div class="container-fluid">
                
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="#"> CreatorsHangout </a>
                    
                </div>
                
                <ul class="nav navbar-nav navbar-left">
                   
                    <li> <a href="index.php"> Home </a> </li>
                    <li class="active"> <a href="login.php"> Login </a> </li>
                    
                </ul>
                
            </div>
            
        </nav>
        
        <div class="container-fluid">
            
            <center>
                
                <?php
                    
                echo "<strong>";
                    
                    $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                    if (strpos($url, "id=same")) {
                        echo "The username exists on our system! Try again";
                    } elseif (strpos($url, "id=registered")) {
                        echo "Yay! You've been registered. You can now login... :)";
                    }
                    
                echo "</strong>";
                
                ?>                   
                
            
                <h3>
                    Welcome!
                </h3><br>
                
            <form method="POST" action="redirect.php">
                
                <input type="text" name="username" required placeholder="Enter your username"><br><br>
                <input type="password" name="password" required placeholder="Enter your password"><br><br>
                <button type="submit" class="btn btn-default"> Login </button>
                
            </form>
                
                <br><br>
                
                <h3> Don't have an account? <a href="register.php"> Click me! </a> </h3>
            
            </center>
                
        </div>
        
    </body>
</html>
