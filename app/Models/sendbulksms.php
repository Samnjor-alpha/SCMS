<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sendbulksms extends Model
{
    protected $table = 'sms';
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message', 'sent','tel_no'
    ];

    public static function create(array $input)
    {
    }

    public function setCatAttribute($value)

    {

        $this->attributes['tel_no'] = json_encode($value);

    }
}
