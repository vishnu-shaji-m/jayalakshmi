<?php

namespace Modules\Admin\Models;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Blog extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes, Sluggable;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection("image")->singleFile();
        $this->addMediaCollection("banner")->singleFile();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        if ($media && $media->collection_name === 'image') {
            $this->addMediaConversion('thumb')
                ->width(300)->height(100)->sharpen(10)->nonQueued();
        }
    }

    public function getImageValueAttribute()
    {
        return $this->hasMedia('image') ? $this->getFirstMediaUrl('image') : null;
    }

    public function getThumbImageValueAttribute()
    {
        return $this->hasMedia('image') ? $this->getFirstMediaUrl('image', 'thumb') : null;
    }

    public function getBannerValueAttribute()
    {
        return $this->hasMedia('banner') ? $this->getFirstMediaUrl('banner') : null;
    }

    public function getPublishedOnValueAttribute()
    {
        return Carbon::parse($this->published_on)->format('d M Y');
    }

    public function setSearchKeywordsAttribute($value)
    {
        // Filter out null and empty values from the input array
        $searchKeywords = array_filter($value, fn($tag) => !is_null($tag) && trim($tag) !== '');

        // Convert the filtered array to a comma-separated string or set it to null if empty
        $this->attributes['search_keywords'] = !empty($searchKeywords) ? implode(',', $searchKeywords) : null;
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
