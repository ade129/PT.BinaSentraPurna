<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Trees;
use Illuminate\Http\Request;
use SoftDeletes;

class TreesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('admin');
    }

    public function index()
    {
        $contents = [
            'trees' => Trees::all(),
        ];
        // return $contents;
        $pagecontent = view('trees.index',$contents);

        //masterpage

        $pagemain = array(
            'title' => 'Trees',
            'menu' => 'trees',
            'submenu' => '',
            'pagecontent' => $pagecontent
            );

        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        $contents = [
            'trees' => Trees::all(),
        ];
        $pagecontent = view('trees.create',$contents);

        // masterpage
        $pagemain = array(
            'title' => 'Trees',
            'menu' => 'trees',
            'submenu' => '',
            'pagecontent' => $pagecontent,
        );

        return view('masterpage', $pagemain);
    }

    public function save_page(Request $request)
    {
        $request->validate([    
            'code' => 'required',
            'name' => 'required',
           ]);
      
          $saveTrees = New Trees;
          $saveTrees->code = $request->code;
          $saveTrees->name = $request->name;
          $saveTrees->save();           
          return redirect('trees')->with('status_success','New Tree Created');
        
    }
}
