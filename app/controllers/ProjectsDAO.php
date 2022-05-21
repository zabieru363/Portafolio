<?php
    require_once "app/models/Project.php";
    require_once "app/config/Connection.php";

    class ProjectsDAO extends Connection
    {
        # Array de objetos de la clase Project.
        public $projects = [];

        # MÉTODOS CRUD.
        public function listProjects()
        {
            # Vaciamos el array de objetos.
            $this->projects = [];

            $query = "SELECT * FROM proyectos";
            $param = [];

            $this->data_query($query,$param);

            foreach($this->rows as $row)
            {
                # Creamos un nuevo objeto proyecto.
                $project = new Project();

                $project->__set("Id", $row["Id"]);
                $project->__set("Titulo", $row["Titulo"]);
                $project->__set("Descripcion", $row["Descripcion"]);
                $project->__set("Enlace", $row["Enlace"]);
                $project->__set("Foto", $row["Foto"]);

                $this->projects[] = $project;
            }
        }
    }
?>