<?php

namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Career extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function jobType()
    {
        return $this->belongsTo(JobType::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function CareerEnquiries()
    {
        return $this->hasMany(CareerEnquiry::class);
    }

    public function getLocationAttribute()
    {
        return implode(', ', [
            optional($this->city)->name,
            optional($this->state)->name
        ]);
    }
}
