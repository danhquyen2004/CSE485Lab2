<?php

require_once APP_ROOT.'/CSE485Lab2/tlunews/models/News.php';
class NewsService {
    public function getallNews() {
        $Category = []; // Khởi tạo mảng lưu kết quả

        try {
            $conn = new PDO('mysql:host=localhost;dbname=tlunews', 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM News";
            $stmt = $conn->query($sql);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $News = new $News(
                    $row['id'], 
                    $row['title'], 
                    $row['content'], 
                    $row['image'], 
                    $row['created_at'], 
                    $row['category_id'] 
                );
                $News[] = $News; // Thêm đối tượng vào mảng
            }

        } catch (PDOException $e) {
            // In lỗi ra màn hình hoặc ghi log nếu cần
            error_log($e->getMessage());
        } finally {
            $conn = null; // Đóng kết nối
        }

        return $News;
    }
}

?>