<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Policies;
use Illuminate\Http\Request;
use Validator;
use SoftDeletes;

class PoliciesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('admin');
    }

    public function index()
    {
        $contents = [
            'policies' => Policies::all(),
        ];
        // return $contents;
        $pagecontent = view('policies.index',$contents);

        //masterpage

        $pagemain = array(
            'title' => 'Policies',
            'menu' => 'policies',
            'submenu' => '',
            'pagecontent' => $pagecontent
            );

        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        $contents = [
            'policies' => Policies::all(),
        ];
        $pagecontent = view('policies.create',$contents);

        // masterpage
        $pagemain = array(
            'title' => 'Policies',
            'menu' => 'policies',
            'submenu' => 'policies',
            'pagecontent' => $pagecontent,
        );

        return view('masterpage', $pagemain);
    }

    public function save_page(Request $request)
    {
        $request->validate([    
            'numb_policies' => 'required',
            'numb_applications' => 'required',
            'name' => 'required',
            'trees' => 'required',
            'age' => 'required',
            'exp' => 'required',
            'price' => 'required',
            'type' => 'required',
            'premi' => 'required'
          ]);
      
          $savePolicies = New Policies;
          $savePolicies->numb_policies = $request->numb_policies;
          $savePolicies->numb_applications = $request->numb_applications;
          $savePolicies->name = $request->name;
          $savePolicies->trees = $request->trees;
          $savePolicies->age = $request->age;
          $savePolicies->exp = $request->exp;
          $savePolicies->price = $request->price;
          $savePolicies->type = $request->type;
          $savePolicies->premi = $request->premi;
          $savePolicies->save();           
          return redirect('policies')->with('status_success','New Polis Created');
        
    }

    public function update_page(Policies $polis)
    {
        $contents = [
            'polis' => Policies::find($polis->idpolicies),
        ];
        $pagecontent = view('policies.update',$contents);

        // return $contents;

        // masterpage
        $pagemain = array(
            'title' => 'Policies',
            'menu' => 'policies',
            'submenu' => 'policies',
            'pagecontent' => $pagecontent,
        );

        return view('masterpage', $pagemain);   
    }

    public function update_save(Request $request, Policies $polis)
    {
        // return $request->all();
        $request->validate([
            'numb_policies' => 'required|max:100',
            'numb_applications' => 'required',
            'name' => 'required',
            'trees' => 'required',
            'age' => 'required',
            'exp' => 'required',
            'price' => 'required',
            'type' => 'required',
            'premi' => 'required'
            ]);

            
            $updatePolicies = Policies::find($polis->idpolicies);
            $updatePolicies->numb_policies = $request->numb_policies;
            $updatePolicies->numb_applications = $request->numb_applications;
            $updatePolicies->name = $request->name;
            $updatePolicies->trees = $request->trees;
            $updatePolicies->age = $request->age;
            $updatePolicies->exp = $request->exp;
            $updatePolicies->price = $request->price;
            $updatePolicies->type = $request->type;
            $updatePolicies->premi = $request->premi;
            $updatePolicies->save();
              return redirect('policies')->with('status_success','Update Polis');
            
    }


}
