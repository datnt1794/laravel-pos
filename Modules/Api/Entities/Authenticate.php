<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
class Authenticate extends \App\User
{
    use Notifiable;
    use SoftDeletes;
    use HasRoles;
}
