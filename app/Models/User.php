<?php

namespace App\Models;

<<<<<<< HEAD
use App\Models\Role;
use App\Models\Orders;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Log;
use App\Models\UserRole;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    protected $fillable = [
        'name', 'email', 'password', 'dob', 'phone', 'address', 'verification_code','email_verified_at','expired_at',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();
        static::deleting(function($user) {
            $user->orders()->delete();
        });
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    // public function user_roles()
    // {
    //     return $this->hasMany(UserRole::class, 'user_id', 'id');
    // }

    public function orders()
    {
        return $this->hasMany(Orders::class,'client_id','id');
    }

=======
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
>>>>>>> d9a8d6e (create api login, order detail)
}
