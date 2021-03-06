<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Permission;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable = ['name', 'email', 'password'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class , 'role_permissions');
    }


}
