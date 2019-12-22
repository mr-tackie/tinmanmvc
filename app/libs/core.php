<?php

    /***
     * App Coure Class
     * Creates URL and loads core controller
     * URL FOMRAT - /controller/method/params
     */

     class Core{
         protected $currentController = 'Pages';
         protected $currentMethod = 'index';
         protected $params = [];

         public function __construct()
         {
            $url = $this->getUrl();

            if($url != null && file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
                $this->currentController = ucwords(($url[0]));

                unset($url[0]);
            }

            //Require the necessary controller
            require_once '../app/controllers/'.$this->currentController.'.php';

            //instatntiate controller
            $controller = new $this->currentController;
        
         }

         public function getURL()
         {
             if(isset($_GET['url'])){
                 $url = rtrim($_GET['url'], '/');
                 $url = filter_var($url, FILTER_SANITIZE_URL);
                 $url = explode('/', $url);
                 return $url;
             }
         }
     }
