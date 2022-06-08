<?php

class NewDeleter extends Controller {
    function __construct()
    {
        $newInfo = $this->getSubmittedData($_GET, ["id"]);
        $NewsModel = new NewsModel();
        if ($NewsModel->deleteNew($newInfo["id"])) {
            $this->response(["success" => true]);
            die;
        }
        $this->response(["success" => false]);
    }
}