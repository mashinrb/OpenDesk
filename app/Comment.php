<?php

namespace Opendesk;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ticket_id', 'user_id', 'description', 'created_by', 'updated_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the User for the Comment.
     */
    public function user()
    {
        return $this->belongsTo(\Opendesk\User::class);
    }

    /**
     * Get the Ticket for the Comment.
     */
    public function ticket()
    {
        return $this->belongsTo(\Opendesk\Ticket::class);
    }
}