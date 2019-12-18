<?php
/**
 * Created by PhpStorm.
 * User: laschekina
 * Date: 12/12/2018
 * Time: 09:34
 */

namespace LSI\MarketBundle\Services;

use Symfony\Component\HttpFoundation\File\UploadedFile;


class FileUpload
{
    private $targetDir;
    public function __construct($targetDir) {
        $this->targetDir = $targetDir;
    }
    public function upload(UploadedFile $file) {
        $file_name = empty($file->getClientOriginalName()) ? md5(uniqid()).'.'.$file->guessExtension() : $file->getClientOriginalName();
        $file->move($this->targetDir, $file_name);
        return $file_name;
    }
}