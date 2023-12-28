<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customfield extends Model
{
    use HasFactory;

    protected $table = 'customfields';

    protected $fillable =
    [
        'fieldtypes',
        'fieldnames',
        'fieldprivacy',
        'fieldrequired',
        'fieldoptions',
        'displaytypes',
        'status',
    ];


}
