<?php

namespace App\Models;

use App\Models\Faq;
use App\Models\Banner;
use App\Models\Reason;
use App\Models\Feature;
use App\Traits\GlobalStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceCategory extends Model{

    use HasFactory, GlobalStatus;

    public function scopeActive($query = null){

        if($query){
            $query = $query;
        }else{
            $query = $this;
        }

        return $query->where('status', 1);
    }

    public function products($filter = false){

        $with = ['getConfigs'];

        if($filter){
            array_push($with, 'price');
        }

        return $this->hasMany(Product::class, 'category_id')
                    ->when($filter, function($query){
                        $query->where('status', 1)
                              ->whereHas('price', function($price){
                            $price->filter($price);
                        });
                    })->with($with);
    }


    public function showStatus(): Attribute{

        return new Attribute(
            get: function(){

                if(request()->routeIs('admin*')){
                    $class = "text--small badge font-weight-normal badge--";
                }else{
                    $class = "badge badge-";
                }

                if ($this->status == 1){
                    $class .= 'success';
                    $text = trans('Enable');
                }
                else{
                    $class .= 'warning';
                    $text = trans('Disable');
                }

                return "<span class='$class'>" . trans($text) . "</span>";
            }
        );
    }

    public function banners()
    {
        return $this->hasMany(Banner::class);
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function reasons()
    {
        return $this->hasMany(Reason::class);
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }

}


