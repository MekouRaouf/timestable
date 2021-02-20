<?php

namespace App\Core;

class App{

    protected $controlleur = 'Acceuil';
    protected $methode = 'index';
    protected $parametres = [];
    protected $db;
    
    public function __construct()
    {
        //Charger ma base de donnees
        //$this->db = Database::getDB();

        $url = $this->parseUrl();
        
        define("CheminControlleur", dirname(__DIR__).DIRECTORY_SEPARATOR.'controlleurs'.DIRECTORY_SEPARATOR);

        if(isset($url[0])){
            $this->controlleur = file_exists(CheminControlleur.ucfirst($url[0]).'.php') ? ucfirst($url[0]) : null;
        }
            
        require_once '../app/controlleurs/'.ucfirst($this->controlleur).'.php';

        $controlleur = 'App\\Controlleur\\'.$this->controlleur;
        
        $this->controlleur = new $controlleur;

        if(isset($url[1])){
            $this->methode = method_exists($this->controlleur, $url[1]) ? $url[1] : null;
        }
               
        $this->parametres = $url ? array_values($url) : [];
        
        call_user_func_array([$this->controlleur, $this->methode], $this->parametres);
        
    }

    public function parseUrl(){
        if(isset($_SERVER['REQUEST_URI'])){
            $url = explode('/', filter_var(rtrim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL));
            $url_peices = [];
            foreach($url as $val){
                if($val != ""){
                    array_push($url_peices, $val);
                }
            }

            return $url_peices;
        }
        return [$this->controlleur, $this->methode, $this->parametres];
        
    }

}