<?php
/**
 * Vérifie si une variable d'environnement est définie.
 * Si la variable d'environnement n'est pas définie, l'exécution du script est arrêtée.
 *
 * @param string $varName Le nom de la variable d'environnement à vérifier.
 * @return void
 */
function checkEnv($varName) {
    if (getenv($varName) === false) {
        die("Erreur : Le paramètre '$varName' n'est pas défini dans le fichier .env.");
    }
}

/**
 * Vérifie si une variable d'environnement correspond au format d'un identifiant Steam valide (17 chiffres).
 * Si le format est incorrect, l'exécution du script est arrêtée.
 *
 * @param string $varName Le nom de la variable d'environnement contenant l'identifiant Steam.
 * @return void
 */
function checkSteamIdFormat($varName) {
    $steamId = getenv($varName);
    if (!preg_match('/^[0-9]{17}$/', $steamId)) {
        die("La variable '$varName' doit être un identifiant Steam valide de 17 chiffres.");
    }
}

/**
 * Vérifie que toutes les variables d'environnement obligatoires sont définies.
 * Si l'une des variables obligatoires n'est pas définie, l'exécution du script est arrêtée.
 *
 * @return void
 */
function checkRequiredEnvVariables() {
    $requiredVars = [
        'DB_HOST',
        'DB_USER',
        'DB_PASS',
        'DB_NAME',
        'DB_PORT',
        'RCON_HOST',
        'RCON_PORT',
        'RCON_PASS',
        'MAX_COP',
        'MAX_MEDIC',
        'MAX_ADMIN',
        'MAX_DONATOR',
        'API_STEAM',
        'STEAMID_CREATOR'
    ];

    foreach ($requiredVars as $var) {
        checkEnv($var);
    }

    checkSteamIdFormat('API_STEAM');
    checkSteamIdFormat('STEAMID_CREATOR');
}

/**
 * Vérifie les variables d'environnement facultatives.
 * Si une variable est définie et que l'API est activée (API_ENABLE = 1), elle vérifie également les variables API_USER et API_PASS.
 *
 * @return void
 */
function checkOptionalEnvVariables() {
    $optionalVars = [
        'API_ENABLE',
        'API_USER',
        'API_PASS'
    ];

    foreach ($optionalVars as $var) {
        if (getenv($var) !== false) {
            if ($var == 'API_ENABLE' && getenv('API_ENABLE') == '0') {
                echo "API n'est pas nécessaire car 'API_ENABLE' est à 0.\n";
            }

            if ($var == 'API_USER' && getenv('API_ENABLE') == '1') {
                checkEnv('API_USER');
            }

            if ($var == 'API_PASS' && getenv('API_ENABLE') == '1') {
                checkEnv('API_PASS');
            }
        }
    }
}

/**
 * Effectue la vérification complète des variables d'environnement obligatoires et facultatives.
 * Cette fonction appelle les fonctions checkRequiredEnvVariables() et checkOptionalEnvVariables().
 *
 * @return void
 */
function checkAllEnvVariables() {
    checkRequiredEnvVariables();
    checkOptionalEnvVariables();
}

?>
