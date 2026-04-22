<?php
namespace app\controllers;

class UserController {
    public function register() {
        return json_encode(["status" => "Success"]);
    }
}