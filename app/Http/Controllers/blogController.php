<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tables1;

class blogController extends Controller
{
    
    public function index(){
        $tables = tables1::paginate(1);
        return (['tables' => $tables]);
     
                            }
}
