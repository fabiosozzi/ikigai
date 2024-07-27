<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentTree\Concern\ModelTree;

class MenuItem extends Model
{
    use HasFactory, HasUuids, ModelTree;

    protected $fillable = [
        'parent_id',
        'title',
        'order',
        'page_id',
        'link_type',
        'external_link',
    ];
}
