<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable=['address','postal_code','age','price','picture','overview','contact_name','contact_tel'];
    public function user()
    {
        return $this->belongsTo('User::class');
    }
}
