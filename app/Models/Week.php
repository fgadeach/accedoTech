<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;

    public function agent_week()
    {
        return $this->hasOne(Agent_Week::class, 'week_id');
    }
}
