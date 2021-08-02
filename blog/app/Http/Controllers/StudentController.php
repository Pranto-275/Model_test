<?php

namespace App\Http\Controllers;

use App\StudentsModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function allSelect()
    {
        $result = StudentsModel::pluck('name');
        return $result;
    }

    public function demo()
    {
        // $result = StudentsModel::select('name', 'address', 'number')->get();

        // $result = StudentsModel::where('name', '=', 'pranto')->delete();

        // $result = StudentsModel::insert(['name' => 'pranto', 'address' => 'kashimpur', 'number' => '01830445326']);

        $result = StudentsModel::where('name', '=', 'shunni')->update(['name' => 'Pranto']);


        return $result;
    }
}
