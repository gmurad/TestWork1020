<?php

namespace App\Repositories;

use App\Repositories\Interfaces\RoleRepositoryInterface;
use App\Models\Role;

class RoleRepository implements RoleRepositoryInterface {
    public function all(){
        return Role::all();
    }

    public function create(array $data){
        return Role::create($data);
    }

    public function find($id){
        return Role::find($id);
    }
}