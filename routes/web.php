<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomesectionController;
use App\Http\Controllers\SingleController;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Page;
use App\Models\Homesection;

Route::get('/', function () {
    $projects = Project::all();
    $skills = Skill::all();
    $sections = homesection::all();


    $page = Page::where('slug','about-me')->first();

    return view('index',compact('projects','skills','page','sections')
);
});
Route::get('/about', [PageController::class, 'about']);

Route::post('/contact-form', [ContactController::class, 'store'])->name('contact.submit');
Route::get('/skills', [SkillController::class, 'showSkills']);


Route::get('/projects/{id}', [ProjectController::class, 'showProjectDetails'])->name('showProjectDetails');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

