# Tasks API Documentation

Base URL: "http://127.0.0.1"

Methods:

GET / or GET /{id}
    If {id} is provided, returns the task.
    If omitted, returns all tasks.
    Expected request body: none

POST /
    Creates a new task.
    Expected request body:
        {"task": "a b c"}

PUT /{id}
    Updates the content of a specific task.
    Expected request body:
        {"task": "a b c"}

DELETE /{id}
    Deletes the specified task.
    Expected request body: none


Technologies used:
    PHP
    MariaDB
