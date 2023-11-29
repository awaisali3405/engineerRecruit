<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    use HasFactory;
    protected $table = 'personal_detail';
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'national_insurance',
        'dob',
        'email',
        'post_code',
        'telephone1',
        'mobile',
        'address',
        'e_first_name',
        'e_last_name',
        'e_email',
        'e_post_code',
        'e_telephone1',
        'e_mobile',
        'e_address',
        'bank_name',
        'bank_short_code',
        'bank_account_number',
        'is_criminal',
        'criminal_detail',
        'proof_id_img',
        'proof_of_address_img',
        'proof_of_public_img',
        'proof_of_dbs_img',
        'proof_of_gas_front_img',
        'proof_of_gas_back_img',
        'declaration_name',
        'declaration_date',
        'health_name',
        'health_date',
        'is_confirm',
        'sub_contractor_date',
        'term_sub_contractor_name',
        'percentage',
        'contractor_name',
        'contract_date', 'is_contact_confirm'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
