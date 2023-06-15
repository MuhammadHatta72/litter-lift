<?php

namespace App\Services\Interfaces;

interface UserServiceInterface
{
    public function getAllUser();
    public function getUserById(string $id);
    public function createUser(array $data);
    public function updateUser(string $id, array $data);
    public function deleteUser(string $id);
}
