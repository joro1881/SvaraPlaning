<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Planing;

class UserStory extends Model
{
	$fillable = [];

	/**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function planing()
	{
		return $this->belongsTo(class::Planing);
	}
}
