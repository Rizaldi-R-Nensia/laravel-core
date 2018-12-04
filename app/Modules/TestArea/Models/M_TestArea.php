<?php

namespace App\Modules\TestArea\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class M_TestArea extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'test';
    protected $primaryKey = 'id'; // or Null
    protected $table_name = 'test';

    protected $fillable = [
        'name','code_test',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
