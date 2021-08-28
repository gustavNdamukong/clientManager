<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//use Illuminate\Support\Facades\DB;

class Company extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'company';




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'city', 'location', 'postcode', 'lat', 'lon', 'address', 'description', 'user_id'];





    //public $timestamps = false;


    /**
     * Establish that it belongs to CompanyType
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function companyType()
    {
        return $this->belongsTo(CompanyType::class);
    }


    /**
     * Establish that it belongs to CompanyStatus
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function companyStatus()
    {
        return $this->belongsTo(CompanyStatus::class);
    }


    /**
     * Establish that it has many contacts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contact()
    {
        return $this->hasMany('App\Models\Contact', 'company_id');
    }




    /*public function getPaginated($howMany = 4)
    {
        $collection = Shop::paginate($howMany);//->toArray(); let's try getting an obj coz the LV paginator doesn't seem to work with arrays

        return $collection;
    }*/






}
