<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class DoctorProfile extends Model
{
    protected $fillable = [
        'user_id',
        'slug',
        'years_of_experience',
        'rating',
        'specializations',
        'languages',
        'verification_status',
        'rejection_reason',
        'verified_by',
        'verified_at',
        'bio',
        'clinic_name',
        'clinic_address',
        'city',
        'state',
        'profile_image',
        'home_visit_fee',
        'clinic_visit_fee',
        'video_session_fee',
        'slot_duration',
        'max_patients_per_day',
        'buffer_time',
        'same_day_bookings',
        'profile_completed',
        'is_featured',
    ];

    protected $casts = [
        'specializations' => 'array',
        'languages' => 'array',
        'rating' => 'decimal:2',
        'home_visit_fee' => 'decimal:2',
        'clinic_visit_fee' => 'decimal:2',
        'video_session_fee' => 'decimal:2',
        'verified_at' => 'datetime',
        'same_day_bookings' => 'boolean',
        'profile_completed' => 'boolean',
        'is_featured' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function verifier(): BelongsTo
    {
        return $this->belongsTo(User::class, 'verified_by');
    }

    public function documents(): HasMany
    {
        return $this->hasMany(DoctorDocument::class, 'doctor_id', 'user_id');
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(DoctorFaq::class)->orderBy('sort_order');
    }

    public function photos(): HasMany
    {
        return $this->hasMany(DoctorPhoto::class)->orderBy('sort_order');
    }

    public function galleryPhotos(): HasMany
    {
        return $this->hasMany(DoctorPhoto::class)->where('type', 'gallery')->orderBy('sort_order');
    }

    public function clinicPhotos(): HasMany
    {
        return $this->hasMany(DoctorPhoto::class)->where('type', 'clinic')->orderBy('sort_order');
    }

    public static function generateSlug(string $name): string
    {
        $base = Str::slug($name);
        $slug = $base;
        $count = 0;
        while (static::where('slug', $slug)->exists()) {
            $count++;
            $slug = $base . '-' . $count;
        }
        return $slug;
    }

    public function isVerified(): bool
    {
        return $this->verification_status === 'approved';
    }

    public function isPending(): bool
    {
        return $this->verification_status === 'pending';
    }
}

