<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyStatus extends Model
{


    /**
     * Establish that it has many companies
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function company()
    {
        return $this->hasMany('App\Models\Company', 'companyStatus_id');
    }
}
