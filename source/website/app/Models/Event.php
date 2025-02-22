<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'date_in' => 'datetime:Y-m-d',
            'date_out' => 'datetime:Y-m-d',
        ];
    }
}
