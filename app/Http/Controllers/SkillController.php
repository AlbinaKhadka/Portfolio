<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function home ()
{
    $skills = Skill::all();
    // dd($skills);


    return view('index' ,compact('skills'));

}
}
