<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Spatie\Permission\Traits\HasPermissions;
class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    protected  $fillable = ['name', 'email', 'password'];

    // public function getImage()
    // {
    //     if (!$this->image)
    //         return asset('no_image.png');
    //     return asset($this->image);
    // }
}
