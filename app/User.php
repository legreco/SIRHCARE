<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

use OwenIt\Auditing\Auditable;
class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;
    use Auditable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    protected $dontKeepAuditOf = ['created_at', 'updated_at','remember_token'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
