<?php

namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Str;

class BannerAndMetaTag extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('banner')->singleFile();
        $this->addMediaCollection('banner_mobile')->singleFile();
    }

    public function getPageValueAttribute()
    {
        return str_replace('-', ' ', Str::title($this->page));
    }

    public function getBannerValueAttribute()
    {
        return $this->hasMedia('banner') ? $this->getFirstMediaUrl('banner') : null;
    }

    public function getBannerMobileValueAttribute()
    {
        return $this->hasMedia('banner_mobile') ? $this->getFirstMediaUrl('banner_mobile') : null;
    }
}
