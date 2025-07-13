<?php
$routes = [
    '#^/$#' => 'Dashboard',
    '#^/dashboard$#' => 'Dashboard',
    '#^/login$#' => 'Login',
    '#^/logout$#' => 'Logout',
    '#^/players$#' => 'Players',
    '#^/players/(\d+)$#' => 'PlayerDetail',
    '#^/vehicles$#' => 'Vehicles',
    '#^/vehicles/(\d+)$#' => 'VehicleDetail',
    '#^/gangs$#' => 'Gangs',
    '#^/gangs/(\d+)$#' => 'GangDetail',
    '#^/houses$#' => 'Houses',
    '#^/houses/(\d+)$#' => 'HouseDetail',
    '#^/logs$#' => 'Logs',
    '#^/notes$#' => 'Notes',
    '#^/notes/(\d+)$#' => 'NoteDetail',
    '#^/staff$#' => 'Staff',
    '#^/settings$#' => 'Settings',
];

function Dashboard()
{
    require_once __DIR__ . '/../pages/dashboard.php';
}

function Login()
{
    require_once __DIR__ . '/../pages/login.php';
}

function Logout()
{
    require_once __DIR__ . '/../pages/logout.php';
}

function Players()
{
    require_once __DIR__ . '/../pages/players.php';
}

function PlayerDetail($id)
{
    include __DIR__ . '/../pages/player-detail.php';
}

function Vehicles()
{
    require_once __DIR__ . '/../pages/vehicles.php';
}

function VehicleDetail($id)
{
    include __DIR__ . '/../pages/vehicle-detail.php';
}

function Gangs()
{
    require_once __DIR__ . '/../pages/gangs.php';
}

function GangDetail($id)
{
    include __DIR__ . '/../pages/gang-detail.php';
}

function Houses()
{
    require_once __DIR__ . '/../pages/houses.php';
}

function HouseDetail($id)
{
    include __DIR__ . '/../pages/house-detail.php';
}

function Logs()
{
    require_once __DIR__ . '/../pages/logs.php';
}

function Notes()
{
    require_once __DIR__ . '/../pages/notes.php';
}

function NoteDetail($id)
{
    include __DIR__ . '/../pages/note-detail.php';
}

function Staff()
{
    require_once __DIR__ . '/../pages/staff.php';
}

function Settings()
{
    require_once __DIR__ . '/../pages/settings.php';
}

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// normalisation : suppression du slash final sauf pour la racine
if ($path !== '/' && str_ends_with($path, '/')) {
    $path = rtrim($path, '/');
}

// Vérifier si une route correspond AVANT d'inclure le header
$matched = false;
$matchedFunction = null;
$matchedParams = [];

foreach ($routes as $pattern => $function) {
    if (preg_match($pattern, $path, $matches)) {
        $matched = true;
        $matchedFunction = $function;
        array_shift($matches);
        $matchedParams = $matches;
        break;
    }
}

// Si aucune route ne correspond, définir le code 404 AVANT d'inclure le header
if (!$matched) {
    http_response_code(404);
}

// Traiter la logique de la page AVANT d'inclure le header pour permettre les redirections
if ($matched) {
    // Démarrer un buffer de sortie pour capturer la sortie de la page
    ob_start();
    
    // Exécuter la fonction de la route correspondante
    call_user_func_array($matchedFunction, $matchedParams);
    
    // Récupérer le contenu généré par la page
    $pageContent = ob_get_clean();
} else {
    // Pour la page 404, on peut démarrer le buffer aussi
    ob_start();
    require_once __DIR__ . '/../pages/404.php';
    $pageContent = ob_get_clean();
}