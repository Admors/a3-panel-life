<?php

function setEnvVariable($key, $value) {
    $envPath = __DIR__ . '/../.env';

    if (!file_exists($envPath)) {
        file_put_contents($envPath, '');
    }

    $envContent = file_get_contents($envPath);

    if (preg_match("/^{$key}=.*$/m", $envContent)) {
        $envContent = preg_replace("/^{$key}=.*$/m", "{$key}={$value}", $envContent);
    } else {
        $envContent .= PHP_EOL . "{$key}={$value}";
    }

    file_put_contents($envPath, $envContent);
}