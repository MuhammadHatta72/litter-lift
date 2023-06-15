<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function getAllUser()
    {
        return User::where('role', 'user')->paginate(2);
    }

    public function getUserById(string $id)
    {
        return User::findOrFail($id);
    }

    public function createUser(array $data)
    {
        return User::create($data);
    }

    public function updateUser(string $id, array $data)
    {
        $user = $this->getUserById($id);
        $user->update($data);
        return $user;
    }

    public function deleteUser(string $id)
    {
        $user = $this->getUserById($id);
        $user->delete();
        return $user;
    }
}
