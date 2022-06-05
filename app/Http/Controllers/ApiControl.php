<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class ApiControl extends Controller
{
    public function create(Request $request)
    {
        $students = new Student();
        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');
        
        $students->save();
        return response()->json('$students');
    }
    public function delete(Request $request)
    {
        $students = new Student();
        $students->fname = $request->input('fname');
        
        
        $students->delete();
        return response()->json('$students');
    }
    
}
