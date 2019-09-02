<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Buildings;
use Illuminate\Http\Request;

class BuildingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('admin');
    }
    public function index()
    {
        $contents = [
            'buildings' => Buildings::all(),
        ];

        $pagecontent = view('buildings.index',$contents);

        // masterpage
        $pagemain = array(
            'title' => 'Buildings',
            'menu' => 'Buildings',
            'submenu' => 'buildings',
            'pagecontent' => $pagecontent,
        );

        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        $contents = [
            'buildings' => Buildings::all(),
        ];
        $pagecontent = view('buildings.create',$contents);

        // masterpage
        $pagemain = array(
            'title' => 'Buildings',
            'menu' => 'buildings',
            'submenu' => 'buildings',
            'pagecontent' => $pagecontent,
        );

        return view('masterpage', $pagemain);
    }

    public function save_page(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'fee' => 'required',
        ]);
        $saveBuildings = new Buildings;
        $saveBuildings->code = $request->code;
        $saveBuildings->name = $request->name;
        $saveBuildings->fee = $request->fee;
        $saveBuildings->save();
        return redirect('buildings')->with('Status Success','Building Created');
    }
}
