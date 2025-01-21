<?php

namespace Modules\Admin\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactEnquiry extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getFormattedPhoneNumberAttribute()
    {
        return str_replace([' ', '-', '(', ')'], '', $this->phone_number);
    }

    public function setMessageAttribute($value)
    {
        $this->attributes['message'] = strip_tags($value);
    }

    public function getDateFormattedAttribute()
    {
        return Carbon::parse($this->created_at)->format('d M Y');
    }
}
