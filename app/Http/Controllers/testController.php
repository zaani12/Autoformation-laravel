<?php

namespace App\Http\Controllers;
use App\Models\tables1;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Nette\Utils\Paginator;
use Illuminate\View\View;
use Illuminate\Support\Facades\validator;
class testController extends Controller
{
    public function index() :view{
       $validator = validator::make([
            "test"=> "agddr",
            "content"=> "fdr",
        ], [
            "test"=> "required |min:4 ",
            "content"=> "required |min:4 ",

        ]);
        // dd($validator->fails()); // return true or fals 
        // dd($validator->errors()); // return array of error messages 
        dd($validator->validated());
        // $tables = tables1::paginate(3);
        // return (['tables' => $tables]);
        return view('test.index',[
            $tables = tables1::paginate(1),
            'tables' => $tables
        ]);
        

    }
  
    public function show(string $test , string $id): RedirectResponse | tables1
    {
        $table =tables1::find($id);
        if($table->test != $test){
            return to_route('blog.show', ['test'=> $table->test, 'id'=> $table ->id]);
        }
        return $table;
    }

}