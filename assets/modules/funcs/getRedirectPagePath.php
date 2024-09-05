<?php
// 
// 
// Args: 
//   - $startPath: string - path to start with so for example you put in "assets/" it'll check inside of assets folder
//
// Returns: string - path to the page

return function ($startPath) {
    $pageName = isset($_GET['p']) ? $_GET['p'] : 'home';
    $path = $startPath . $pageName . '.php';

    if (!file_exists($path)) {
        return $startPath . '404.php';
    }

    return $path;
}
?>