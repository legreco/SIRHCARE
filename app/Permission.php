<?php

namespace App;


use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    //
    public function resource()
    {
        $this->belongsTo('App\Resource');
    }
}
