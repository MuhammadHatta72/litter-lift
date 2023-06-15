<?php

namespace App\Repository\Interfaces;

use Illuminate\Http\UploadedFile;

interface ProfileRepositoryInterface
{
    public function updateProfile(string $id, array $data, UploadedFile $file);
    public function deletePhotoProfile($id);
}
