<?php

function obtenerClasePrioridad($prioridad){

    switch ($prioridad) {
        case 'alta':
            return 'priority-alta';
        case 'media':
            return 'priority-media';
        case 'baja':
            return 'priority-baja';
        default:
            return 'Error';
    }
}

function renderizarTarea($tarea){

    $clasePrioridad = obtenerClasePrioridad($tarea['prioridad'] ?? '');
    $titulo = htmlspecialchars($tarea['titulo'] ?? 'Tarea sin título', ENT_QUOTES, 'UTF-8');
    return '<li class="tarea ' . $clasePrioridad . '">' . $titulo . '</li>';

}

?>