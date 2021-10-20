<?php
class User
{
    private $database;
    public array $errors;
    public array $success;

    public function __construct()
    {
        $this->database = new Database;
    }

    // LOGIN
    function login($username, $password)
    {
        if (empty($this->errors)) {
            $query = "SELECT * ";
            $query .= "FROM users ";
            $query .= "WHERE username = :username ";
            $query .= "AND password = :password";
            $this->database->prepare($query);
            $this->database->bind(":username", $username);
            $this->database->bind(":password", $password);
            $row = $this->database->getRow();

            if ($this->database->rowCount() > 0) {
                $_SESSION["id"] = $row->id;

                return true;
            } else {
                $this->errors[] = "User not found";
                return false;
            }
        }
    }

    function register($username, $email, $password)
    {
        $query = "INSERT INTO users(username,email,password) ";
        $query .= "VALUES(:username, :email, :password)";

        $this->database->prepare($query);
        $this->database->bind(":username", $username);
        $this->database->bind(":email", $email);
        $this->database->bind(":password", $password);

        if($this->database->execute()){
            $this->success[] = "User has been created.";
            return true;
        }else{
            $this->error[] = "Please contact an Admin.";
            return false;
        }

    }

    // Display Error
    function displayError()
    {
        echo "<pre>";
        var_dump($this->errors);
        echo "</pre>";
    }
    // Display Success
    function displaySuccess()
    {
        echo "<pre>";
        var_dump($this->success);
        echo "</pre>";
    }
}
