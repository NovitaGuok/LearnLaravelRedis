<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function userRole()
    {
        return $this->belongsTo('App\Role','role_id');
    }

    public function isAdmin()
    {
        return false;
    }

    public function isPatient()
    {
        if ($this->userRole->name == 'Patient') {
            return true;
        }
        return false;
    }

    public function doctor()
    {
        return $this->belongsTo('App\Model\Doctor\Doctor','user_id','user_id');
    }

    public function patient()
    {
        return $this->belongsTo('App\Model\Patient\Patient','user_id','user_id');
    }
}
