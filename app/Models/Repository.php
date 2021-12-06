<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    use HasFactory;

    /* Indicates if the model should be timestamped.
*
* @var bool
     */
    //public $timestamps = false;
    public function usesTimestamps() : bool{
        return false;
    }
}
