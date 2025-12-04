<?php

include __DIR__."/../models/TaskModel.php";


 class TaskController
{

    public static function getAll () {

        $data = [
          "tasks" => TaskModel::getAll()
        ];

        return json_encode([
          "message" => "OK",
          "success" => true,
          "data" => $data,
          "code" => 200
        ]);

    }

    public static function get ($taskId) {

        $task = TaskModel::getById($taskId);

        if ($task):

            $data = [
              "task" => $task
            ];

            return json_encode([
              "message" => "OK",
              "data" => $data,
              "success" => true,
              "code" => 200
            ]);

        else:

            return json_encode([
              "message" => "Task with ID $taskId not found",
              "success" => false,
              "data" => null,
              "code" => 404
            ]);

        endif;

    }

    public static function post ($task) {

        TaskModel::create($task);

        return json_encode([
          "message" => "CREATED!",
          "success" => true,
          "data" => null,
          "code" => 201
        ]);

    }

    public static function put ($taskId, $taskData) {

        TaskModel::updateById($taskId, $taskData);

        return json_encode([
          "message" => "UPDATED!",
          "success" => true,
          "data" => null,
          "code" => 200
        ]);

    }

    public static function delete ($taskId) {

        TaskModel::deleteById($taskId);

        return json_encode([
          "message" => "DELETED!",
          "success" => true,
          "data" => null,
          "code" => 204
        ]);

    }

}
