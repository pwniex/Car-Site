
<?php


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
        $query = self::$db->query("SELECT DISTINCT marka from offroad ", PDO::FETCH_ASSOC);
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
        $query = self::$db->prepare("SELECT DISTINCT model FROM offroad WHERE marka=:marka");
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
    
   
}
?>