<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    // protected $table = "koko";
    // protected $primaryKey = 'course_id';
    // public $timestamps = false;
    // protected $fillable = ['name','start_date','start_time'];
    protected $guarded  = [];
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updated_date';

}
