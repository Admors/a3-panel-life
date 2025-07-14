<?php

$routes = [
    '/' => ['file' => 'pages/dashboard.php'],
    '/dashboard' => ['file' => 'pages/dashboard.php'],
    '/login' => ['file' => 'pages/login.php'],
    '/logout' => ['file' => 'pages/logout.php'],
    '/players' => ['file' => 'pages/players.php'],
    '/players/{id}' => ['file' => 'pages/player_detail.php', 'params' => ['id']],
    '/vehicles' => ['file' => 'pages/vehicles.php'],
    '/vehicles/{id}' => ['file' => 'pages/vehicle_detail.php', 'params' => ['id']],
    '/gangs' => ['file' => 'pages/gangs.php'],
    '/gangs/{id}' => ['file' => 'pages/gang_detail.php', 'params' => ['id']],
    '/houses' => ['file' => 'pages/houses.php'],
    '/houses/{id}' => ['file' => 'pages/house_detail.php', 'params' => ['id']],
    '/logs' => ['file' => 'pages/logs.php'],
    '/notes' => ['file' => 'pages/notes.php'],
    '/notes/{id}' => ['file' => 'pages/note_detail.php', 'params' => ['id']],
    '/staff' => ['file' => 'pages/staff.php'],
    '/settings' => ['file' => 'pages/settings.php'],
];

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestUri = rtrim($requestUri, '/') ?: '/';

$found = false;

foreach ($routes as $route => $config) {
    // Transforme /user/{id} → regex /user/([a-zA-Z0-9_-]+)
    $pattern = preg_replace('#\{[a-zA-Z_]+\}#', '([a-zA-Z0-9_-]+)', $route);
    $pattern = "#^" . ($route === '/' ? '/' : rtrim($pattern, '/')) . "$#";

    if (preg_match($pattern, $requestUri, $matches)) {
        array_shift($matches); // supprime le match complet

        // Gère les paramètres si besoin
        $params = [];
        if (!empty($config['params'])) {
            foreach ($config['params'] as $index => $key) {
                $params[$key] = $matches[$index] ?? null;
            }
        }

        // Injecte les paramètres dans $_GET
        foreach ($params as $k => $v) {
            $_GET[$k] = $v;
        }

        require_once $config['file'];
        $found = true;
        break;
    }
}

if (!$found) {
    http_response_code(404);
    require_once 'pages/404.php';
}
