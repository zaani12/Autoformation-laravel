<?php

namespace App\Http\Controllers;
use App\Models\tables1;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Nette\Utils\Paginator;
use Illuminate\View\View;
use Illuminate\Support\Facades\validator;
use  App\Http\Requests\TestFilterRequest;
class testController extends Controller
{
    public function index(TestFilterRequest $request) :view{
    //    $validator = validator::make([
    //         "test"=> "ffffsd",
    //         "content"=> "cccccfdr",
    //     ],
    //      [
    //         "test"=> "required |min:4 ",
    //         "content"=> "required |min:4 ",

    //     ]
    //     // [
    //     //     "tset"=> [Rule::unique("tables")->ignore('2')],
    //     // ]
    // );
        // dd($validator->fails()); // return true or fals 
        // dd($validator->errors()); // return array of error messages 
        // dd($validator->validated());
        // $tables = tables1::paginate(3);
        // return (['tables' => $tables]);
        return view('test.index',[
            $tables = tables1::paginate(1),
            'tables' => $tables
        ]);
        

    }
  
    public function show(string $test , string $post): RedirectResponse | tables1
    {
        $table =tables1::find($post);
        if($table->test != $test){
            return to_route('blog.show', ['test'=> $table->test, 'post'=> $table ->id]);
        }
        return $table;
    }
    // public function show($slug) {
    //     // Retrieve the item using the $slug parameter
    //     $item = tables1::where('slug', $slug)->first();
    
    //     // Pass the item to a view and display the more details page
    //     return view('blog.show', ['item' => $item]);
    // }
    

}