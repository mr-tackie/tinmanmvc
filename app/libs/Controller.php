<?php
    class Controller{
        /***
         * 
         * Base controller class to load models and views into controller
         */

         //Load a model
         public function model($model){
             if(file_exists('../app/models/'.ucwords($model).'.php')){
                 //require model file
                 require_once '../app/models/'.ucwords($model).'.php';

                 return new $model();
             }else{
                 throw new Exception('ERR::MODEL_NOT_FOUND');
             }
         }

         //Load view file
         public function view($view, $data = []){
            if(file_exists('../app/views/'.$view.'.php')){
                require_once '../app/views/'.$view.'.php';
            }else{
                throw new Exception('ERR::VIEW_NOT_FOUND');
            }
         }
    }
?>