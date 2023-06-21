<?php
    include "backend/fungsiphp.php";
    
    form_open("backend/fungsilogin.php", "POST");
    echo "<h2><center> Login </center></h2>";
    input_html("text", "username", "", "40","", "username");
    input_html("password", "password", "", "40","", "password");
    login("submit"," login", "login", "btn-login", "login");
    form_close();
?> 