<?php
class Translator {
    private $lang;
    private $translations = [];

    public function __construct($lang = 'French') {
        $this->lang = $lang;
        $this->loadTranslations();
    }

    private function loadTranslations() {
        $xml = simplexml_load_file(__DIR__ . '/../assets/languages.xml');
        foreach ($xml->Key as $key) {
            $id = (string) $key['ID'];
            $this->translations[$id] = (string) $key->{$this->lang};
        }
    }

    public function translate($key) {
        return $this->translations[$key] ?? "[$key]";
    }

    public function setLanguage($lang) {
        $this->lang = $lang;
        $this->loadTranslations();
    }
}
