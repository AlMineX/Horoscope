<?php
include 'models/model.php';
$action=isset($_REQUEST['action'])?$_REQUEST['action']:"";
if(isset ($_REQUEST ['action'])){
    $action=$_REQUEST ['action'];
}
else{
    $action="";
}
include 'controllers/controller.php';