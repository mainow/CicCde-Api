<?php

class Controller 
{

    function response(array $info) 
    {
        echo json_encode($info, JSON_PRETTY_PRINT);
    }

    function getSubmittedData(array $method, array $keywords):array 
    {
        $keysOut = [];
        foreach ($keywords as $keyword) {
            if (isset($method[$keyword])) {
                $keysOut[$keyword] = $method[$keyword];
            }
            // verificar si el valor existe en la variable $_FILES, esto para poder reconocer archivos
            if (isset($_FILES[$keyword])) {
                $keysOut[$keyword] = $_FILES[$keyword];
            }
        }
        return $keysOut;
    }
}