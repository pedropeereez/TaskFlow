<ul>
<?php
if (!empty($tasks) && is_array($tasks)) {
    foreach ($tasks as $task) {
        // Clase base
        $taskClasses = 'task-item';

       
        if (!empty($task['completed'])) {
            $taskClasses .= ' completed';
        }

       
        $priority = isset($task['priority']) ? $task['priority'] : '';
        switch ($priority) {
            case 'alta':
                $taskClasses .= ' priority-alta';
                break;
            case 'media':
                $taskClasses .= ' priority-media';
                break;
            case 'baja':
                $taskClasses .= ' priority-baja';
                break;
            default:
                // Sin prioridad conocida: no añadir clase
                break;
        }

       
        $title = isset($task['title']) ? $task['title'] : '(sin título)';
        echo '<li class="' . htmlspecialchars($taskClasses, ENT_QUOTES, 'UTF-8') . '">';
        echo '<span class="title">' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '</span>';
        echo '</li>';
    }
} else {
    echo '<li class="task-item">No hay tareas.</li>';
}
?>
</ul>
