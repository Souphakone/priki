<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Domain;
use Illuminate\Support\Carbon;

class Practice extends Model
{
    use HasFactory;
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    public function publicationState()
    {
        return $this->belongsTo(publicationState::class);
    }

    static function practicesGetByModifiedDate($day)
    {
        return self::where('updated_at', '>=', Carbon::now()->subDays(intVal($day)))->WhereHas('publicationState', function ($q) {
            $q->where('slug', 'PUB');
        })->get();
    }
}
