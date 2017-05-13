<?php
session_start();
include 'db.php';
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
        <title> Register </title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <style>
            input {
                text-align: center;
            }
        </style>
    </head>
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
            <h3> Please register to enjoy our services! </h3><br><br>
            </center>
            
            <center> 
                <form method="POST" action="signup.php">

                    <input type="text" name="username" placeholder="Username" required><br><br>
                    <input type="password" name="password" placeholder="Password" required><br><br>
                    <button type="submit" class="btn btn-default"> Register! </button>

                </form>
            </center>
            
        </div>
        
    </body>
</html>
