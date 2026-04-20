<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KycDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kyc_details';

    protected $fillable = [
        'user_id',
        'aadhar_no',
        'aadhar_front',
        'aadhar_back',
        'pancard_no',
        'pancard_front',
        'pancard_back',
        'kyc_status',
        'reviewed_by',
        'reviewed_at',
        'remarks',
    ];

    protected $casts = [
        'reviewed_at' => 'datetime',
    ];

    /**
     * User who owns this KYC
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Admin who reviewed the KYC
     */
    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewed_by');
    }

    /**
     * Check if KYC is approved
     */
    public function isApproved(): bool
    {
        return $this->kyc_status === 'Approved';
    }

    /**
     * Check if KYC is pending
     */
    public function isPending(): bool
    {
        return $this->kyc_status === 'Pending';
    }

    /**
     * Check if KYC is rejected
     */
    public function isRejected(): bool
    {
        return $this->kyc_status === 'Rejected';
    }
}