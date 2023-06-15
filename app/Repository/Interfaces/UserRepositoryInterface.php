<?php

namespace App\Repository\Interfaces;

interface UserRepositoryInterface
{
    public function getAllUser();
    public function getUserById(string $id);
    public function createUser(array $data);
    public function updateUser(string $id, array $data);
    public function deleteUser(string $id);
}
