<?php

class UserController extends BaseController {

    public function getIndex()
    {
        $response = ["id" => "2"];
        echo json_encode($response);
    }

    public function getData($data)
    {
        $response = ["id" => $data];
        echo json_encode($response);
    }
}
