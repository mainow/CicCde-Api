<?php

class News extends Controller 
{
    public function __construct() 
    {
        $NewsModel = new NewsModel();
        // var_dump(mysqli_fetch_all($NewsModel->getNews()));
        $news = mysqli_fetch_all($NewsModel->getNews());
        $this->response(["news" => $news]);
    }
}