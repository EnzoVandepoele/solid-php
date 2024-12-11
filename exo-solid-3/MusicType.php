<?php

class InvalidFileException extends Exception {}
class InvalidExtensionException extends InvalidFileException {}
class UnknownExtensionException extends InvalidFileException {}

abstract class MusicType
{
    protected $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function getFilename() : string
    {
        return $this->filename;
    }

    abstract public function listen();
}
?>