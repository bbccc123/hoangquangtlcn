<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufactures extends Model
{
    use HasFactory;
    protected $table = 'manufactures';
    protected $primaryKey = 'manu_id';
    public $timestamps = false;
    protected $fillable = ['manu_name'];
}
