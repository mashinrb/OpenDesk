<?php

namespace Opendesk;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
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
        'name' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Users for the Team.
     */
    public function users()
    {
        return $this->belongsToMany(\Opendesk\User::class);
    }
    /**
     * Get the Services for the Team.
     */
    public function services()
    {
        return $this->belongsToMany(\Opendesk\Service::class);
    }
}