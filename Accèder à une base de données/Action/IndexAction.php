<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/AnswerDAO.php");


    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            if(isset($_POST['nom']) && isset($_POST["reponse"])){
                AnswerDAO::addAnswer($_POST["nom"], $_POST["reponse"]);
            } 

            $answer = AnswerDAO::getAnswer(); 

            return compact('answer');
        }
    }