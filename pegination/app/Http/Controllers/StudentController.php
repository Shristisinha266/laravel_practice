<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function home(){
        // $all = Student::cursorPaginate();
        // $all = Student::cursorPaginate();
        $all = Student::Paginate(15);
        return view("welcome", ['data'=>$all]);
    }
}
