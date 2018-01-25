<?php

namespace wDevStudio\LaravelMessenger\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'conversation_id',
        'sender_id',
        'message',
        'is_seen',
        'deleted_from_sender',
        'deleted_from_receiver'
    ];

    /**
     * The rules attributes.
     *
     * @var array
     */
    protected static $rules = [
        'conversation_id'       => 'integer',
        'withId'                => 'required|integer', // message reciever.
        'message'               => 'required|string',
        'is_seen'               => 'boolean',
        'deleted_from_sender'   => 'boolean',
        'deleted_from_receiver' => 'boolean'
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

    /**
     * Get message conversation.
     *
     * @return collection
     */
    public function conversation()
    {
        return $this->belongsTo(\wDevStudio\LaravelMessenger\Models\Conversation::class);
    }

    /**
     * Get message sender.
     *
     * @return collection
     */
    public function sender()
    {
        return $this->belongsTo(config('messenger.user.model', config('messenger.user.model', \App\User::class)));
    }

    /**
     * Get message files.
     */
    public function files()
    {
        return $this->hasMany(\wDevStudio\LaravelMessenger\Models\File::class);
    }
}
