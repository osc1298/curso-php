<?php


namespace App\Htpp;

class Response{

    protected $view; //se peude retornar vistar,array, json, <pdf class=""></pdf>
    
    //se define en el constructor la vista por default
    public function __construct($view)
    {
        $this->view = $view; // cualquier vista por default
    }

    //definimos los get

    public function getView()
    {
        return $this->view;
    }

    //ejecutamos y enviamos la funcion get

    public function send(){
        $view = $this->getView();

                    //funcion propia de php que me ayuda a traer el contenido
        $content = file_get_contents(viewPath($view));

        require viewPath('layout');
    
    }
}