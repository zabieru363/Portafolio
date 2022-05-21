<?php
    require_once "app/controllers/ProjectsDAO.php";

    $projectsDAO = new ProjectsDAO("portafolio");

    # Llamamos al método listar proyectos.
    $projectsDAO->listProjects();

    # Ahora generamos dinámicamente los proyectos con PHP.
    foreach($projectsDAO->projects as $project)
    {
        $binary = $project->__get("Foto");
        $image = base64_decode($binary);
        echo "<div style='' class='project-box'>";
    }
?>