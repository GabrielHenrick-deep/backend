<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'long_description',
        'category',
        'tags',
        'image_url',
        'demo_url',
        'github_url',
        'status',
        'start_date',
        'completion_date',
        // 'team',
        'technologies',
        'features',
        'challenges',
        'outcomes',
    ];

    // Indica ao Laravel que esses campos são armazenados como JSON
    protected $casts = [
        'tags' => 'array',
        // 'team' => 'array',
        'technologies' => 'array',
        'features' => 'array',
        'challenges' => 'array',
        'outcomes' => 'array',
        'start_date' => 'date',
        'completion_date' => 'date',
    ];
   public function members()
    {
        return $this->belongsToMany(Member::class, 'member_project', 'project_id', 'member_id');
    }


}
