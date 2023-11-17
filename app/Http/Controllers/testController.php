<?php

namespace App\Http\Controllers;
use App\Models\tables1;
use Illuminate\Http\Request;
use Nette\Utils\Paginator;
use Illuminate\View\View;



class testController extends Controller
{
    public function create(){
        return view('test.create');
    }
    public function store(Request $request)
    {
        // dd($request);
    
        $table = tables1::create([
            'test' => $request->input('test'),
            'name' => $request->input('name'),
            'content' => $request->input('content'),
        ]);
    
        // return redirect()->route('test.showTest', ['test'=> $table->test, 'id'=> $table ->id]);
        return view("test.showTest",compact('table'))->with('success,',"l'article a été bien sauvgarder");
    }
    public function index() :view{
        $tables = tables1::paginate(1);
        return view("test.index",compact('tables'));

    }
  
    public function show(string $test , string $id):tables1
    {
    
        $table =tables1::find($id);

        return view('showTest', ['post' => $table]);
    }

}