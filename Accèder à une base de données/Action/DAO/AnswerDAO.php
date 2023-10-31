<?php

require_once("action/DAO/connection.php");

    class AnswerDAO{


        public static function getAnswer(){
            $connection = Connection::getConnection();
            $statement = $connection ->prepare("SELECT * FROM stack_answers");
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $statement->execute();
            $rows = $statement->fetchALL();
            return $rows;
        }


        public static function addAnswer($author,$answer){
            $connection = Connection::getConnection();
            $statement = $connection ->prepare("INSERT INTO stack_answers (author, answer) VALUES(?,?)");

                        //le bind pour pas faire de sql injection
            $statement->bindParam(1,$author);
            $statement->bindParam(2,$answer);
            $statement->execute();
        }
    }
        

        



    