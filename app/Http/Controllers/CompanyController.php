<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $company = Company::with('customer', 'email', 'developer')->get();
        return view('bestview')->with('comp', $company);
    }
}
