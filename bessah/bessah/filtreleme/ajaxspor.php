<?php
include ("dBconnspor.php");

$action=$_POST["action"];

switch ($action)
{
    case "marka":
        $db=new dbConn();
        return $db->getMarkaList();
        break;

    case "model":
        $db=new dbConn();
        $marka=$_POST["name"];
        return $db->getModelList($marka);
        break;       

}