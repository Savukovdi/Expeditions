<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leader extends Model
{
    use HasFactory;
    protected $table = 'leaders';
    protected $fillable = ['id', 'fio', 'telephone', 'email'];
    public $timestamps = false;
}
