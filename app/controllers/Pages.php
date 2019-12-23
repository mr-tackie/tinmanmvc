<?php
    class Pages extends Controller{
        public function __construct(){
            
        }

        public static function index(){
            self::view('Hello');
        }
    }
?>