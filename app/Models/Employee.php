<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $table = "employee";

    public function getCompany()
    {
        return $this->hasOne("App\Models\Company");
    }

    public function getDemo()
    {
        return $this->hasOne("App\Models\Demo");
    }

    public function getDoc()
    {
        return $this->hasMany("App\Models\EmpDoc");
    }
}
