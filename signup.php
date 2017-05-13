<?php
session_start();
include 'db.php';

/* 
 * Copyright (C) 2017 RTG
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT uid FROM accounts WHERE uid = '$username'";
$result = mysqli_query($conn, $sql);
$check = mysqli_num_rows($result);

if ($check > 0) {
    $url = "login.php?id=same";
    header ("Location: " . $url);
} else {
    
    $sql = "INSERT INTO accounts (uid, pwd) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql);
    
    header ("Location: login.php?id=registered");
    
}