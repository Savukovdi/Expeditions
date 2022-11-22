<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recording extends Model
{
    use HasFactory;
    protected $table = 'recordings';
    protected $fillable = ['id', 'user_id', 'exp_id', 'passport', 'date', 'event', 'nomer'];
    public $timestamps = false;

    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function expedition(){
        return $this -> belongsTo(Expedition::class, 'exp_id', 'id');
    }
}
