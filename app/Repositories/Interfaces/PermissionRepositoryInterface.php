<?php

namespace App\Repositories\Interfaces;

interface PermissionRepositoryInterface {
    public function all();
    public function create(array $data);
}
