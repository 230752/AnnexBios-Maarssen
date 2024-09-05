<?php
return function ($startPath) {
    $pageName = isset($_GET['p']) ? $_GET['p'] : 'home';
    $path = $startPath . $pageName . '.php';

    if (!file_exists($path)) {
        return $startPath . '404.php';
    }

    return $path;
}
?>