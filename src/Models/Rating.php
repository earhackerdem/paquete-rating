<?php

namespace EarHackerDem\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Rating extends Pivot
{
    use HasFactory;

    public $incrementing = true;

    protected $table = 'ratings';

    public function rateable(): MorphTo
    {
        return $this->morphTo();
    }

    public function qualifier(): MorphTo
    {
        return $this->morphTo();
    }

    public function approve()
    {
        $this->approved_at = Carbon::now();
    }
}
