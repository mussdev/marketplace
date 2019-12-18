<?php
/**
 * Created by PhpStorm.
 * User: laschekina
 * Date: 12/12/2018
 * Time: 13:24
 */

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
class FileRemove {
    private $targetDir;
    public function __construct($targetDir) {
        $this->targetDir = $targetDir;
    }
    public function removeFile($path) {
        $fs = new Filesystem();
        $file = $this->targetDir . '/' . $path;
        try{
            if($fs->exists($file)){
                $fs->remove($file);
                return true;
            }
            return false;
        } catch(IOExceptionInterface $e){
            //log error for $e->getPath();
        }
    }
}