<?php

namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Str;

class Slider extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection("image")->singleFile();
        $this->addMediaCollection("image_mobile")->singleFile();
        $this->addMediaCollection("video_thumbnail_image")->singleFile();
        $this->addMediaCollection("video")->singleFile();
        $this->addMediaCollection("video_url_thumbnail_image")->singleFile();
    }

    public function getImageValueAttribute()
    {
        return $this->hasMedia('image') ? $this->getFirstMediaUrl('image') : null;
    }

    public function getImageMobileValueAttribute()
    {
        return $this->hasMedia('image_mobile') ? $this->getFirstMediaUrl('image_mobile') : null;
    }

    public function getVideoThumbnailImageValueAttribute()
    {
        return $this->hasMedia('video_thumbnail_image') ? $this->getFirstMediaUrl('video_thumbnail_image') : null;
    }

    public function getVideoValueAttribute()
    {
        return $this->hasMedia('video') ? $this->getFirstMediaUrl('video') : null;
    }

    public function getVideoUrlThumbnailImageValueAttribute()
    {
        return $this->hasMedia('video_url_thumbnail_image') ? $this->getFirstMediaUrl('video_url_thumbnail_image') : null;
    }

    public function setActionTitleAttribute($value)
    {
        if ($this->action_type === 'none') {
            $this->attributes['action_title'] = null;
        } else {
            $this->attributes['action_title'] = $value;
        }
    }

    public function setActionUrlAttribute($value)
    {
        if ($this->action_type === 'none') {
            $this->attributes['action_url'] = null;
        } else {
            $this->attributes['action_url'] = $value;
        }
    }

    public function setVideoUrlAttribute($value)
    {
        if ($this->media_type === 'video_url') {
            $this->attributes['video_url'] = $value;
        } else {
            $this->attributes['video_url'] = null;
        }
    }

    public function handleMediaChange($request)
    {
        if ($this->isMediaTypeUpdated($request)) {
            $this->removeOldMediaFiles($this->media_type);
        }
    }

    private function isMediaTypeUpdated($request)
    {
        return $request->input('media_type') !== $this->media_type;
    }

    private function removeOldMediaFiles($mediaType)
    {
        $mediaCollections = match ($mediaType) {
            'image' => ['image', 'image_mobile'],
            'video' => ['video_thumbnail_image', 'video'],
            'video_url' => ['video_url_thumbnail_image'],
            default => [],
        };

        foreach ($mediaCollections as $collection) {
            if ($this->hasMedia($collection)) {
                $this->clearMediaCollection($collection);
            }
        }
    }

    public function getMediaTypeValueAttribute()
    {
        return str_replace('_', ' ', Str::title($this->media_type));
    }

    public function getActionTypeValueAttribute()
    {
        return str_replace('_', ' ', Str::title($this->action_type));
    }
}
