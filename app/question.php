<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    //

    
    protected $table ='questions';

    public $primarykey ='id';

    public $timestamps =true;
}
