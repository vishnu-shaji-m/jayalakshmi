<?php

namespace Modules\Admin\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class CareerEnquiry extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('resume')->singleFile();
    }

    public function getFormattedPhoneNumberAttribute()
    {
        return str_replace([' ', '-', '(', ')'], '', $this->phone_number);
    }

    public function getResumeValueAttribute()
    {
        return $this->hasMedia('resume') ? $this->getFirstMediaUrl('resume') : null;
    }

    public function getResumeExtensionAttribute()
    {
        return $this->getFirstMedia('resume') ? strtoupper($this->getFirstMedia('resume')->extension()) : null;
    }

    public function setMessageAttribute($value)
    {
        $this->attributes['message'] = strip_tags($value);
    }

    public function getDateFormattedAttribute()
    {
        return Carbon::parse($this->created_at)->format('d M Y');
    }

    public function career()
    {
        return $this->belongsTo(Career::class)->withTrashed();
    }
}
