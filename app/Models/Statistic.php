<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;
    protected $table = "statistics";

    protected $fillable = [
        'visits_count',
        'docs-count',
        "generating_number_count",
        "messages_sent_count",
    ];
}
