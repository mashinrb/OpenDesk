<?php

namespace Opendesk;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'name', 'description'
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
        'slug' => 'string',
        'name' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];

    /**
     * Get the Tickets for the Service.
     */
    public function tickets()
    {
        return $this->hasMany(\Opendesk\Ticket::class);
    }

    /**
     * Get the Teams for the Service.
     */
    public function teams()
    {
        return $this->belongsToMany(\Opendesk\Team::class);
    }
    /**
     * Get the Issues for the Service.
     */
    public function issues()
    {
        return $this->belongsToMany(\Opendesk\Issue::class);
    }
}