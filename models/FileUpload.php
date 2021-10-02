<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class FileUpload extends Model{

    public $image;

    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'file', 'extensions' => 'jpg,png,jpeg']
        ];
    }

    private function getFolder()
    {
        return Yii::getAlias('@app/web/img/');
    }

    private function generateFilename()
    {
        return strtolower(md5(uniqid($this->image->baseName)) . '.' . $this->image->extension);
    }

    public function saveFile()
    {
        $filename = $this->generateFilename();

        $this->image->saveAs($this->getFolder().$filename);

        return $filename;
    }


    public function uploadFile(UploadedFile $file, $currentImage)
    {

        $this->image = $file;

        if($this->validate()){

            $this->deleteCurrentImage($currentImage);

            return $this->saveFile();

        }
    }

    public function fileExists($currentImage)
    {
        if(!empty($currentImage) && $currentImage != null && is_file($this->getFolder() . $currentImage))
        {
            return file_exists($this->getFolder().$currentImage);
        }
    }

    public function deleteCurrentImage($currentImage)
    {
        if($this->fileExists($currentImage))
        {
            unlink($this->getFolder().$currentImage);
        }
    }


}