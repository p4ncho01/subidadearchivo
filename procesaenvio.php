<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ubicacion="C;/xampp/htdocs/sesion26-04".$_FILES["imagen"]["name"];

move_uploaded_file($_FILES["imagen"]["tmp_name"],$ubicacion);
