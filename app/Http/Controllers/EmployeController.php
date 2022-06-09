<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
use App\Models\Company;


class EmployeController extends Controller
{
    public function data()
    {
$employ= new Employe();
$employ->name ='Bibek';
$employ->address = 'Butwal';
$employ->save();


$comp=new Company();
$comp->cname = 'Amnil Technologies';


$employ->Company()->save($comp);  
return Company::find(1);  }
}
