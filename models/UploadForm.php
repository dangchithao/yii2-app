<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

/**
 * Class UploadForm
 *
 * @property UploadedFile $imageFile
 * @property UploadedFile[] $imageFiles
 *
 * @package app\models
 */
class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    /**
     * @var UploadedFile[]
     */
    public $imageFiles;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }

    /**
     * @return bool
     */
    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }

    public function uploadMultiple()
    {
        if ($this->validate()) {
            foreach ($this->imageFiles as $file) {
                $file->saveAs('uploads/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
}
