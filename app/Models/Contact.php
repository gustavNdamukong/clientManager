<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{

    public function contactRole()
    {
        return $this->belongsToMany('App\Models\ContactRole', 'contact_to_contactrole', 'contact_id', 'contactrole_id');
    }


    /**
     * Establishes that it belongs to the Company class
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
