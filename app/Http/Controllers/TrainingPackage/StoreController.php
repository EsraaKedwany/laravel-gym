<?php

namespace App\Http\Controllers\TrainingPackage;

use App\TrainingPackage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function store() {
        TrainingPackage::create(request()->all());
        return redirect()->route('packages.index');
    }

    public function index(){
        switch(auth()->user()->getRole()->id)
        {
            case 1: return view('packages.index'); break;
            case 2:
            case 3: return redirect()->route('payment.create');
        }

    }

    /**
     * Get the packages table as a json for jquery to render in DataTables .
     *
     * @return packagesTable(JSON)
     */

    public function data_packages(){
        return datatables()->of(TrainingPackage::with('gyms'))->toJson();
    }

}
