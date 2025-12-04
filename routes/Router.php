<?php

include __DIR__."/../controllers/TaskController.php";

 class Router
{

    public static function handle ($httpMethod) {

        $uri = $_SERVER["REQUEST_URI"];

        $uri_id = explode("/", $uri)[1] ?? null;


        switch ($httpMethod):

            case "GET":

                if (!$uri_id):

                    return TaskController::getAll();

                else:

                    return TaskController::get($uri_id);

                endif;

                break;

            case "POST":

                $data = file_get_contents("php://input");

                $parsed = json_decode($data, true);

                return TaskController::post($parsed["task"]);

                break;

            case "PUT":

                $data = file_get_contents("php://input");

                $parsed = json_decode($data, true);

                return TaskController::put($uri_id, $parsed["task"]);

                break;

            case "DELETE":

                return TaskController::delete($uri_id);

                break;


        endswitch;

    }

}
