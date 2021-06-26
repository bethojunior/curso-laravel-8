<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

    protected $fillable = ['title','description','user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

}
