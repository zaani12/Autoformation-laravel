<?php

namespace App\Http\Controllers;
use App\Models\tables1;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Nette\Utils\Paginator;
use Illuminate\View\View;
class testController extends Controller
{
    public function index() :view{
        // $tables = tables1::paginate(3);
        // return (['tables' => $tables]);
        return view('test.index');
    }
//     public function show(string $test , string $id): RedirectResponse | tables1
//     {
//         $table = tables1::find($id);
//         if($table ->test != $test){
//             return to_route('blog.show', ['test'=> $table->test, 'is'=> $table ->$id]);
//         }
//         return $table;
//     }

}