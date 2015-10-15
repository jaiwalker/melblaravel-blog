<?php

namespace melblaravel;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blogs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'extract','content','user_id'];

    /**
     *  A post has One user 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('melblaravel\User');
    } 
}
