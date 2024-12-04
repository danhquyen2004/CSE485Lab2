<?php
require_once APP_ROOT.'/models/Category.php';
class CategoryService {
    public function getAllCategory(){
    try{
        $conn = new PDO('mysql:host=localhost;dbname=tlunews','root','');
        //truy van  
        $sql = "SELECT * FROM  categories";
        $stmt = $conn->query($sql);
        // Xu ly kq
        $categories = [];
        while ($row = $stmt->fetch()) {
            $category[] = new Category ($row['id'], $row['name']);
            $categories[] = $category;
        }
        return $categories;

    } catch(PDOException $e){
        //$conn = null;
        return $categories = [];
    }
}
}
?>