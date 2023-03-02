<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;
    public $table = "employee";

    public function getCompany()
    {
        return $this->hasOne("App\Models\Company");
    }

    // Accessor
    public function getDemo()
    {
        return $this->hasOne("App\Models\Demo");
    }

    public function getDoc(): HasMany
    {
        return $this->hasMany("App\Models\EmpDoc")->where('img', 'sample1.png');
    }

    // Mutator
    public function setNameAttribute($val)
    {
        $this->attributes['name'] = "Mr " . $val;
    }
}
