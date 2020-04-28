<?php
final class FileWriter
{
    private static $instance;
    private $fileName = "f.txt";


    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new FileWriter();
        }
        return self::$instance;
    }

    function WriteinFile($word)
    {
        echo "{$word} Write sucessfully in {$this->filename}";
    }
}

$fw = FileWriter::getInstance();
$fw->WriteinFile("hello");

var_dump($fw);