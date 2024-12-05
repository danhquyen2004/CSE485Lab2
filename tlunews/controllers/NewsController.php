<?php
require_once APP_ROOT.'/CSE485Lab2/tlunews/services/NewsService.php';
class NewsController{
    public function index(){
        //goi du lieu tu NewsService
        $NewsServie = new NewsService();
        $news = $NewsServie->getAllNews();
        //Render du lieu lay duoc ra Homepage
        include APP_ROOT.'/views/admin/news/index.php';
    }
}
?>