<?php
    class Controllers {
        function _construct(){
            // Creamos una instancia de las Views para
            // poder acceder al metodo render
            $this->view = new Views();
            $this->loadClassModels();

        }

        private function loadClassModels(){
            // Obtenemos el nombre de la clase controlador
            // determinando que el modelo perteneciente a este
            // controlador siempre debera tener al final la palabra "Model"
            $model = get_class($this) . "Model";
            // creamos una cadena de texto con la ruta en la cual debe
            // existir la clase modelo perteneciente a dicho controlador
            $path = "Models/" . $model . ".php";
            if(file_exists($path)){
                require $path;
                $this->model = new $model();
            }
        }
    }