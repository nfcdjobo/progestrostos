<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UtilServiceProvider extends ServiceProvider
{
    public static function generateRandomString($string, $length)
    {
        $randomString = "";
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $string[rand(0, strlen($string) - 1)];
        }
        return $randomString[0] !== "0" ? strtoupper($randomString) : self::generateRandomString($string, $length);
    }

    public static function fetchTable($table, $data)
    {
        if (!class_exists($table)) {
            return false; // Si la classe n'existe pas, retourner false
        }

        // Utiliser la méthode 'exists()' pour vérifier l'existence de la ligne dans la base de données
        return $table::where("id", $data)->exists();
    }
}
