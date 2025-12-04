<?php

// Gets Database class
include __DIR__."/../database/database.php";

 class TaskModel
{

    public static function getAll () {

        $db = Database::getConnection();

        $stmt = $db->prepare("
          SELECT * FROM tasks;
        ");

        $stmt->execute();

        return $stmt->fetchAll();

    }

    public static function getById ($id) {

        $db = Database::getConnection();

        $stmt = $db->prepare("
          SELECT * FROM tasks
          WHERE id = :id;
        ");

        $stmt->execute([":id" => $id]);

        return $stmt->fetch();

    }

    public static function create ($task) {

        $db = Database::getConnection();

        $stmt = $db->prepare("
          INSERT INTO tasks (task)
          VALUES (:task);
        ");

        $stmt->bindValue(":task", $task);

        $stmt->execute();

    }

    public static function updateById ($taskId, $data) {

        $db = Database::getConnection();


        $stmt = $db->prepare("
          UPDATE tasks SET task = :task
          WHERE id = :id;
        ");

        $stmt->bindValue(":task", $data);
        $stmt->bindValue(":id", $taskId);

        $stmt->execute();

    }

    public static function deleteById ($taskId) {

        $db = Database::getConnection();

        $stmt = $db->prepare("
          DELETE FROM tasks
          WHERE id = ?;
        ");

        $stmt->execute([$taskId]);

    }

}
