<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Word;

class PartOfSpeech extends Model
{
    use HasFactory;
    protected $table = 'parts_of_speech';
    protected $fillable = [
        'part_of_speech',
        'slug',
        'definition',
        'example'
    ];

    protected $casts = [
        'definition' => 'array',
        'example' => 'array'
    ];

    public function words() {
        return $this->belongsToMany(Word::class, 'word_part_of_speech', 'part_of_speech_id', 'word_id');
    }
}
