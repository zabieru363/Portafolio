<?php
    final class Project
    {
        # Escribo el nombre de los campos en español para que sean igual que los de la bd.
        private $id;
        private $titulo;
        private $descripcion;
        private $enlace;
        private $foto;

        # Getters y setters

        /**
         * Método mágico get que retorna una propiedad.
         * @param string El nombre de la propiedad de la clase.
         */
        public function __get(string $name)
        {
            return $this->$name;
        }

        /**
         * Método mágico set que establece el valor de una propiedad.
         * @param string El nombre de la propiedad.
         */
        public function __set(string $name, $value)
        {
            $this->$name = $value;
        }
    }
?>