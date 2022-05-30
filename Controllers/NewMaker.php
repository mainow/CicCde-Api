<?php

class NewMaker extends Controller 
{
    public function __construct() 
    {
        $NewsModel = new NewsModel();
        $newInfo = $this->getSubmittedData($_GET, ["date", "title", "content"]);
        if (empty($newInfo["date"]) || empty($newInfo["title"]) || empty($newInfo["content"])) {
            $this->response(["success" => false]);
            die;
        }

        if ($NewsModel->addNew($newInfo["date"], $newInfo["title"], $newInfo["content"])) {
            $this->response(["success" => true]);
        }
        
    }
}