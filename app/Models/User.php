<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;
    public $timestamps= false;
    protected $guarded = [];
    public function post() {
        return $this->HasMany(Post::class);
    }

}
