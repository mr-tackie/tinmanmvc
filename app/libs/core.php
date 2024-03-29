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
            
            //check for second part of url
            if(isset($url[1])){
                if(method_exists($this->currentController, $url[1])){
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }

            // Get parameters
            $this->params = $url ? array_values($url) : [];

            //Call a callback with array of params
            call_user_func_array([$controller, $this->currentMethod], $this->params);
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
