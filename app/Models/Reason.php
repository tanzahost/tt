<?php

namespace App\Models;

use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reason extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'description',
        'svg',
        'sub_title_1',
        'sub_title_2',
        'sub_title_3',
        'sub_desc_1',
        'sub_desc_2',
        'sub_desc_3',
        'url',
        'service_category_id', // Assuming you'll add this field for the relationship
    ];


    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }
}
