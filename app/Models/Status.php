<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table = 'status';
    protected $fillable = ['id', 'event', 'user_id', 'exp_id', 'telephone', 'email', 'adults', 'children', 'date', 'passport', 'description'];
    public $timestamps = false;

    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function expedition(){
        return $this -> belongsTo(Expedition::class, 'exp_id', 'id');
    }
}
