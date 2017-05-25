<?php
include 'db.php';
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
        <title>
           Welcome to CreatorsHangout
        </title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <link href="side-bar.css" rel="stylesheet">
        <style>
            
            div.container {
                box-shadow: 0 0 45px black;
                width: 800px;
                height: 400px;
            }
            
            video::-internal-media-controls-download-button {
                display: none;
            }
            video::-webkit-media-controls {
                overflow: hidden !important
            }
            video::-webkit-media-controls-enclosure {
                width: calc(100% + 32px);
                margin-left: auto;
            }
            .overlay {
                position:absolute;
                top:0;
                left:0;
                z-index:1;
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
                   
                    <li class="active"> <a href="#"> Home </a> </li>
                    <li> <a href="login.php"> Login </a> </li>
                    
                </ul>
                
            </div>
            
        </nav>
        
        <div class="container-fluid">         
            
            <center>
                
                <?php
                    
                echo "<strong>";
                    
                    $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                    if (strpos($url, "id=loggedout")) {
                        session_destroy();
                        echo "You've been logged out!";
                    }
                    
                echo "</strong>";
                
                ?>                
                <br><br>
                
                <h1>
                    Welcome! 
                </h1>
                
                <br><br>
                
                <div class="container">
                    
                    <h3> Featured contents of the Day! </h3>
                    
                    <br>
                    
                    <?php
                    
                        $dir    = './videos';
                        $video_files = [];

                        foreach(glob($dir.'/*.*') as $file) {
                            $file_parts = pathinfo($file);
                            if ($file_parts['extension'] == "mp4"){
                                $video_files[] = $file;
                            }
                        }

                        foreach($video_files as $video_file) {
                            echo "<video autoplay width='500' height='240' oncontextmenu='return false' controls onclick='play()'>";
                            echo "<source src=". $video_file ." type='video/mp4'>";
                            echo "</video><br/>";
                        }

                    ?>
                    
                </div>
                  
            </center>
              
        </div>       
        
    </body>
</html>
