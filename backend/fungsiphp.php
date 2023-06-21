<style>
    <?php include "stylesheet.css" ?>
</style>

<?php
 
    function input_html($type, $name = "", $value = "", $size = "", $id = "", $placeholder = ""){
        echo "<input type = '$type' id = '$id' name = '$name' value = '$value' placeholder = '$placeholder'><br>";
    }

    function form_open($action, $method){
        echo "<form action = '$action' method = '$method' >";
    }

    function form_close(){
        echo "</form>";
    }

    function login($type, $name = "", $id = "", $class = "", $label = ""){
        echo "<button type = '$type' name = '$name' id = '$id', class = '$class'>$label</button><br>";
    }

    function ul(){
        echo "<ul>";
    }

    function logout($link, $label){
        echo "<li><a href='$link'>$label</a></li>";
    }

    function li($label){
        echo "<li><h3>$label</h3></li>";
    }

    function ul_tutup(){
        echo "</ul>";
    }

    function selamat($role = ""){
        echo "<h3>Selamat datang $role</h3>";
    }

?>