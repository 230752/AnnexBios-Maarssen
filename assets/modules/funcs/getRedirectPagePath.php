<?php
return function ($startPath) {
    $pageName = isset($_GET['p']) ? $_GET['p'] : 'home';
    $path = $startPath . $pageName . '.php';

    echo file_exists($path);

    if (!file_exists($path)) {
        return $startPath . '404.php';
    }

    return $pageName;
}
?>