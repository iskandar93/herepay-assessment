<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearchStudent($query, $search)
    {
        return $query->where('name','LIKE','%'.$search.'%')
            ->orWhere('level','LIKE','%'.$search.'%')
            ->orWhere('class','LIKE','%'.$search.'%')
            ->orWhere('parent_contact_no','LIKE','%'.$search.'%');
    }
}
