<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Policies;
use App\Models\Trees;
use App\Models\Buildings;
use Illuminate\Http\Request;
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
            'policies' => Policies::with(['trees'])->get(),
            'policies' => Policies::with(['buildings'])->get(),
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
        $trees = Trees::all();
        $buildings = Buildings::all();
        $contents = [
            'trees' => $trees,
            'buildings' => $buildings,
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
            'numb_applications' => 'required',
            'name' => 'required',
            'age' => 'required',
            'exp' => 'required',
            'price' => 'required',
            'premi' => 'required'
          ]);
      
          $savePolicies = New Policies;
          $savePolicies->numb_policies = $this->get_code;
          $savePolicies->numb_applications = $request->numb_applications;
          $savePolicies->name = $request->name;
          $savePolicies->trees = $request->idtrees;
          $savePolicies->age = $request->age;
          $savePolicies->exp = $request->exp;
          $savePolicies->price = $request->price;
          $savePolicies->type = $request->idbuildings;
          $savePolicies->premi = $request->premi;
          $savePolicies->save();          
        //   return $request->all();
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

    protected function get_code()
    {
        $date_ym = date('ym');
  		$date_between = [date('Y-m-01 00:00:00'), date('Y-m-t 23:59:59')];

        $dataPolicies = Policies::select ('numb_policies')
         ->whereBetween('created_at',$date_between)
         ->orderBy('numb_policies','desc')
         ->first();

         if(is_null($dataPolicies)){
             $nowcode = '0001';
         } else {
              $lastcode = $dataPolicies->numb_policies;
              $lastcode1 = intval(substr($lastcode,-5))+1;
              $nowcode = str_pad($lastcode1, 5 ,'0', STR_PAD_LEFT);

          }   
          return 'POLICIES-'.$date_ym.'-'.$nowcode;
         }

}
