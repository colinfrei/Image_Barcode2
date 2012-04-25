<?php

spl_autoload_register(function($className) {
    $package = 'Image';
    $className = ltrim($className, '\\');
    if (0 === strpos($className, $package)) {
        $fileName = __DIR__ . DIRECTORY_SEPARATOR . str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
        if (is_file($fileName)) {
            require $fileName;
            return true;
        }
    }
    return false;
});
