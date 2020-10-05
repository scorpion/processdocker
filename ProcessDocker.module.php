<?php namespace ProcessWire;

// info snippet
class ProcessDocker extends WireData implements Module, ConfigurableModule {

    public static function getModuleInfo() {
    return [
        'title' => 'ProcessDocker',
        'version' => '0.0.1',
        'summary' => 'Docker container management and health overview dashboard.',
        'autoload' => true,
        'singular' => false,
        'icon' => 'smile-o',
        'requires' => [],
        'installs' => [],
        ];
    }

    public function init() {
    }

    /**
     * Config inputfields
    * @param InputfieldWrapper $inputfields
    */
    public function getModuleConfigInputfields($inputfields) {
        return $inputfields;
    }
}