<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactRole extends Model
{

    public function contact()
    {
        return $this->belongsToMany('App\Models\Contact', 'contact_to_contactrole', 'contactrole_id', 'contact_id');
    }

}
