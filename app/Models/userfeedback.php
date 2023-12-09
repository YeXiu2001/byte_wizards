<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userfeedback extends Model
{
    use HasFactory;
    protected $table = 'userfeedbacks';
    protected $fillable = ['name','reportedby', 'contact', 'rating', 'issues', 'suggestions'];
    public $timestamps = true;
}
