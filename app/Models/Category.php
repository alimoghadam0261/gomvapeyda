<?php

namespace App\Models;
use App\Http\Controllers\FormadsController;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
        'sort',
        'parrent',
        'status',
    ];



    public function formads()
    {
        return $this->belongsToMany(formads::class);
    }


    public function getRouteKeyName()
    {
        return 'title';
    }
}
