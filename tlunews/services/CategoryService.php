<?php

require_once APP_ROOT.'/app/models/Category.php';
class CategoryService{
    public function getallCategory(){
        //B1: ket noi database
        try{
            $conn=new PDO('mysql:host=localhost;dbname=tlunews','root','');
            
            //B2: truy van du lieu
            $sql = "SELECT * from Category";
            $stmt = $conn->query($sql);

            //B3: xu ly ket qua tra ve
            $Category = [];
            while($row = $stmt->fetch()){
                $Category = new Category($row ['id'],$row['title'],$row['content'],$row['image'],$row['created_at'],$row['caterogy_id']);
                $Category[] =  $Category;
            }
            return $Category;

        }catch(PDOException $e){
            return $Category = [];        
    }
}
}
?>