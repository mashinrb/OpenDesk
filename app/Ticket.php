<?php

namespace Opendesk;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'clientname', 'issue', 'description', 'created_by', 'updated_by', 'closed_at', 'service_id'
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
        'clientname' => 'string',
        'issue' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'closed_at' => 'timestamp'
    ];

    /**
     * Get the Comments for the Ticket.
     */
    public function comments()
    {
        return $this->hasMany(\Opendesk\Comment::class);
    }

    /**
     * Get the User for the Ticket.
     */
    public function user()
    {
        return $this->belongsTo(\Opendesk\User::class);
    }

    /**
     * Get the Service for the Ticket.
     */
    public function service()
    {
        return $this->belongsTo(\Opendesk\Service::class);
    }
}