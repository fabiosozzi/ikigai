<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentTree\Concern\ModelTree;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuItem extends Model
{
    use HasFactory, HasUuids, ModelTree;

    protected $fillable = ["parent_id", "title", "order"];
}
