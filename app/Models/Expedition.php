<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expedition extends Model
{
    use HasFactory;
    protected $table = 'expeditions';
    protected $fillable = ['id', 'name', 'description', 'quantity', 'price', 'date', 'duration', 'img', 'complexity', 'location', 'leader_id'];
    public $timestamps = false;

    public function leader(){
        return $this -> belongsTo(Leader::class, 'leader_id', 'id');
    }
}
