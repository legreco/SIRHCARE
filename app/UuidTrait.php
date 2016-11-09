<?php
/**
 * Created by PhpStorm.
 * User: MarcGrecoPeralte
 * Date: 11/8/2016
 * Time: 3:31 PM
 */

namespace App;

use Webpatser\Uuid\Uuid;
trait UuidTrait
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}