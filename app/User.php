<?php

namespace Opendesk;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'ext', 'number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'ext' => 'string',
        'number' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Tickets for the User.
     */
    public function tickets()
    {
        return $this->hasMany(\Opendesk\Ticket::class);
    }

    /**
     * Get the Comments for the User.
     */
    public function comments()
    {
        return $this->hasMany(\Opendesk\Comment::class);
    }

    /**
     * Get the Teams for the User.
     */
    public function teams()
    {
        return $this->belongsToMany(\Opendesk\Team::class);
    }
}