<?php

namespace Modules\Unit\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Org extends Model
{
    use HasFactory;

    /**
     * The primary key of the database table
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = [
        'title', 'org_no',
    ];
    

}
