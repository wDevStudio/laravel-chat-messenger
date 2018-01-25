<?php

namespace wDevStudio\LaravelMessenger\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message_id',
        'path',
        'file_name',
        'url',
        'thumb'
    ];

    /**
     * The rules attributes.
     *
     * @var array
     */
    protected static $rules = [
        //
    ];

    /**
     * The rules getter.
     *
     * @return array
     */
    public static function rules()
    {
        return self::$rules;
    }
}
