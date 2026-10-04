<?php
session_start();

class P49_SetLanguagePreference {
    private array $allowedLanguages = ['en', 'es', 'fr', 'de'];

    public function main(): void {
       if (isset($_GET['lang'])) {
            $requestedLanguage = $_GET['lang'];

            if (in_array($requestedLanguage, $this->allowedLanguages, true)) {
                $language = $requestedLanguage;
            } else {
                $language = 'en';
            }
        } else {
            $language = $_SESSION['lang'] ?? 'en';
        }

        $_SESSION['lang'] = $language;
        echo "Language set to $language";
        
    }
}
