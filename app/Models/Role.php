<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }

    public function isHasPermission($permission){
        $hasPermission = $this->permissions()->where('slug', $permission)->exists();
        return $hasPermission;
    }
}
