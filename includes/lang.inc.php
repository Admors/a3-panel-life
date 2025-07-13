<?php
class Translator {
    private $lang;
    private $translations = [];

    public function __construct($lang = 'French') {
        $this->lang = $lang;
        $this->loadTranslations();
    }

    private function loadTranslations() {
        $xml = @simplexml_load_file(__DIR__ . '/../assets/languages.xml');
        if ($xml === false) {
            throw new \RuntimeException('Failed to load language XML file.');
        }
        foreach ($xml->Key as $key) {
            $id = (string) $key['ID'];
            if (isset($key->{$this->lang})) {
                $this->translations[$id] = (string) $key->{$this->lang};
            } else {
                $this->translations[$id] = "[$id]";
            }
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
