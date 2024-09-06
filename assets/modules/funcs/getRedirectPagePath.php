<?php
// 
// 
// Args: 
//   - $startPath: string - path to start with so for example you put in "assets/" it'll check inside of assets folder
//
// Returns: string - path to the page

$stripInjections = require_once('assets/modules/funcs/stripInjections.php');

return function ($startPath) {
    global $stripInjections;

    $pageName = isset($_GET['p']) ? $stripInjections($_GET['p']) : 'home';
    $path = $startPath . $pageName . '.php';

    if (!file_exists($path)) {
        return $startPath . '404.php';
    }

    return $path;
}
?>