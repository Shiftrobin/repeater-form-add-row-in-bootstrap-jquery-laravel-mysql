<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){
       // dd($request->all());

       $name = $request->name;
       $birth = $request->birth;
       $age = $request->age;
       $blood_group = $request->blood_group;

       for($i=0; $i<count($name); $i++){
            $datasave = [
                'name' => $name[$i],
                'birth' => $birth[$i],
                'age' => $age[$i],
                'blood_group' => $blood_group[$i]
            ];
            DB::table('employees')->insert($datasave);
       }

       Session()->put('success', 'Save Data Successfully!..');
       return back();

    }
}
