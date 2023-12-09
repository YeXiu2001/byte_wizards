<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whistleblower extends Model
{
    use HasFactory;
    protected $table = 'whistleblowerreps';
    protected $fillable = ['fname', 'lname', 'contactno', 'email', 'name_accused', 'position', 'department', 'misconduct', 'persons_involved', 'date_of_incident', 'further_infos'];
    public $timestamps = true;
    protected $attributes = [
        'email' => 'N/A',
    ];
}
