<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\Interfaces\ProfileRepositoryInterface;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileRepository implements ProfileRepositoryInterface
{
    public function updateProfile(string $id, array $data, UploadedFile $file = null)
    {
        $user = User::findOrFail($id);
        $currentPassword = $user->password;
        $currentPasswordInput = $data['current_password'];
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->gender = $data['gender'];
        $user->phone = $data['phone'];
        $user->address = $data['address'];
        if ($data['current_password'] == true && $data['password'] == true) {
            if (Hash::check($currentPasswordInput, $currentPassword)) {
                $user->password = Hash::make($data['password']);
            }
        }
        if ($file) {
            $fileExtension = $file->getClientOriginalExtension();
            if ($user->image != 'not_found') {
                File::delete(public_path('assets/image_users/' . $user->photo));
            }
            $profile_image = "user_" . $user->id . "." . $fileExtension;
            $file->move(public_path('assets/image_users/'), $profile_image);
            $user->photo = $profile_image;
        }
        $user->save();
        return $user;
    }
    public function deletePhotoProfile($id)
    {
        $user = User::findOrFail($id);
        File::delete(public_path('assets/image_users/' . $user->photo));
        $user->photo = 'not_found';
        $user->save();
        return $user;
    }
}
