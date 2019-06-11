<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudInsertController extends Controller
{
    public function insertform(){
        return view('stud_create');
    }

    public function insert(Request $request){
        $name = $request->input('stud_name');
        //DB::table('studens')->insert(
          //  ['name'=>$name]
        //);
        echo "Inserted</br>";
        echo "<a href='/insert'>Back</a>";
    }
}
