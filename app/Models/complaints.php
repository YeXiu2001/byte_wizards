<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complaints extends Model
{
    use HasFactory;
    protected $table = 'complaints';
    protected $fillable = ['c_fname','reportedby', 'c_lname', 'c_contactno', 'c_email', 'c_name_accused', 'c_position', 'c_department', 'offense', 'narration', 'date_of_incident', 'status'];
    public $timestamps = true;
    protected $attributes = [
        'c_email' => 'N/A',
        'status' => 'pending'
    ];
}
