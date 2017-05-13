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
        <title> Welcome! </title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
        
        <nav class="navbar navbar-default">
            
            <div class="container-fluid">
                
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="#"> CreatorsHangout </a>
                    
                </div>
                
                <ul class="nav navbar-nav navbar-left">
                   
                    <li class="active"> <a href="index.php?id=loggedout"> Home </a> </li>
                    
                    <?php
            
                        if (isset($_SESSION['uid'])) {
                            echo '<li> <a href="logout.php"> Logout </a> </li>';
                        }
                        
                     ?>
                    
                    
                </ul>
                
            </div>
            
        </nav>

        <div class="container-fluid">
            
            <center>
            <?php
            
                if (isset($_SESSION['uid'])) {
                    
                    echo "<strong> Welcome, " . $_SESSION['uid'] . "</strong>";
                    echo "<br> You'll upload stuffs here! ";
                    
                } else {
                    echo "You can't access this page!";
                }
                
            ?>
            </center>
            
        </div>
        
    </body>
</html>
