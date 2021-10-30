<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public $fillable = ['name', 'parent_id'];

    public function children() {
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }
}
