<?php

class NewsModel extends Model {
    function __construct()
    {
        parent::__construct(new DataBaseInfo("localhost", "root", "", "ciccde"));
    }

    function getNews() 
    {
        return $this->db->query("SELECT * FROM news");
    }

    function addNew(string $date, string $title, string $content) 
    {
        return $this->db->query("INSERT INTO news (title, date, content) VALUES ('$title', '$date', '$content')"); 
    }

    function deleteNew(string $id) {
        return $this->db->query("DELETE FROM news WHERE id = $id");
    }
}