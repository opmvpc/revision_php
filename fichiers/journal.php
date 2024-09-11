<?php

$file = null;

try {
    checkArgumentCount($argv);

    $file = fopen("", "a");
    fwrite($file, formatMessage($argv[1]));
} catch (\Throwable $th) {
    printErrorMessage($th);
} finally {
    if ($file) {
        fclose($file);
    }
}


function checkArgumentCount(array $argv): void
{
    if (count($argv) !== 2) {
        throw new ArgumentCountError(<<<TEXT
    Vous devez passer votre message en argument !
    
        - Exemple : 
        
            php journal.php "Votre message..."
    
    TEXT);
    }
}

function formatMessage(string $message): string
{
    $datetime = date("Y-m-d H:i:s");
    return <<<TEXT
$datetime : $message

TEXT;
}


function printErrorMessage(Throwable $th): void
{
    echo <<<TEXT
Attention! Une erreur est survenue :

    {$th->getMessage()}

TEXT;
}
