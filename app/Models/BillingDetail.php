<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class BillingDetail extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name_billing_details',
        'email_billing_details',
        'company_billing_details',
        'address_billing_details',
        'city_billing_details',
        'post_code_billing_details',
        'phone_billing_details',
        'notes_billing_details',
        'categories_billing_details',
    ];
}
