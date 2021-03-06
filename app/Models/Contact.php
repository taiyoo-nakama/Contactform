<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname','gender','date','email',
    ];

    public static $rules = array(
        //
    );
    public function getData(){
        $txt = $this->id.':'.$this->name.'('.$this->age.')';
        return $txt;
    }
}
