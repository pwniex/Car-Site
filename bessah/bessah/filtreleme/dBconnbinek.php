<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/22/2018
 * Time: 22:19
 */

class dbConn
{
    protected static $db;


    //veritabanına bağlanan fonksiyon
    public function __construct()
    {
        try{
            self::$db = new PDO("mysql:host=localhost;dbname=bessah;charset=utf8", "root", "root");
        }
        catch (PDOException $exception)
        {
            print $exception->getMessage();
        }
    }

    //Markaları getiren fonksiyon
    public function getMarkaList()
    {
        $data=array();
        $query = self::$db->query("SELECT DISTINCT marka from binek", PDO::FETCH_ASSOC);
        if($query->rowCount())
        {
            foreach ($query as $row)
            {
                $data[]=$row["marka"];
            }
        }
        echo json_encode($data);
    }


    //Modelleri getiren fonksiyon
    public function getModelList($marka){
        $data=array();
        $query = self::$db->prepare("SELECT DISTINCT model FROM binek WHERE marka=:marka");
        $query->execute(array(":marka"=>$marka));
        if($query->rowCount())
        {
            foreach ($query as $row)
            {
                $data[]=$row["model"];
            }
        }
        echo json_encode($data);
    }


    //Renkleri getiren fonksiyon
    public function getRenkList($model){
        $data=array();
        $query = self::$db->prepare("SELECT DISTINCT BinekRenk FROM binek WHERE model=:model");
        $query->execute(array(":model"=>$model));
        if($query->rowCount())
        {
            foreach ($query as $row)
            {
                $data[]=$row["BinekRenk"];
            }
        }
        echo json_encode($data);
    }

    //Renkleri getiren fonksiyon
    public function getHacimList($model){
        $data=array();
        $query = self::$db->prepare("SELECT DISTINCT BinekMotorHacmi FROM binek WHERE model=:model");
        $query->execute(array(":model"=>$model));
        if($query->rowCount())
        {
            foreach ($query as $row)
            {
                $data[]=$row["BinekMotorHacmi"];
            }
        }
        echo json_encode($data);
    }    

    
   
}