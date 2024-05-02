<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ImportExcel;
use App\Models as M;

class ImportDataController extends Controller
{
    public function __construct(){
        ini_set('memory_limit', '1256M');
        ini_set('max_execution_time', '0');
    }

    public function getIndex()
    {
        return view('import');
    }

    public function postSave(Request $request)
    {
        if($request->hasFile('import_file'))
        {
            $ambildata = (new ImportExcel)->toArray(request()->file('import_file'))[0];
            return $ambildata;
        }
    }
}
