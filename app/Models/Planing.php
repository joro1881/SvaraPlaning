<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserStory;

class Planing extends Model
{
	$fillable = [];

	/**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stories()
    {
    	return $this->hasMany(class::UserStory);
    }
}
