<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Overlay extends Model
{
    protected $fillable = [

    ];

    protected $guarded = [
        'user_id',
        'ref_id',
    ];


/*    public function overlay_messages(){
        return $this->hasOne('App\Messages');
    }*/
}
