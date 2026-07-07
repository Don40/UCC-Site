<?php

use App\Http\Controllers\AcademicController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IqacController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ContactController;


Route::get('/', [HomeController::class, 'index'])->name('home');

// Main Pages
Route::view('/about-us', 'pages.about.index')->name('about');

Route::get('/student-corner',  [HomeController::class, 'student'])->name('student-corner');



Route::get('/department', [AcademicController::class, 'departments'])->name('department');

Route::get('/examination', [ExaminationController::class, 'index'])
    ->name('examination.index');    


Route::view('/student-services', 'pages.student-services.index')->name('student-services');

Route::get('/iqac', [IqacController::class, 'index'])->name('iqac');

Route::view('/ssr', 'pages.ssr.index')->name('ssr');

Route::view('/course', 'pages.academic.courses.index')->name('course');

Route::view('/add_on_courses', 'pages.academic.add_on_courses.index')->name('add_on_courses');

Route::view('/examination', 'pages.academic.examination.index')->name('examination');
Route::view('/facilities', 'pages.facilities')->name('facilities');


Route::get('/downloads', [DownloadController::class, 'index'])->name('downloads');

Route::get('/contact_us', [ContactController::class, 'index'])->name('contact');

Route::view('/research', 'pages.research')->name('research');

/*
|--------------------------------------------------------------------------
| Research
|--------------------------------------------------------------------------
*/

Route::prefix('research')->name('research.')->group(function () {
    Route::view('/grants', 'research.grants')->name('grants');
    Route::view('/publications', 'research.publications')->name('publications');
    Route::view('/projects', 'research.projects')->name('projects');
    Route::view('/committee', 'research.committee')->name('committee');
    Route::view('/policy', 'research.policy')->name('policy');
});

/*
|--------------------------------------------------------------------------
| Examination
|--------------------------------------------------------------------------
*/

Route::prefix('examination')->name('examination.')->group(function () {

    Route::view('/library', 'examination.library')->name('library');

    Route::view('/results', 'examination.results')->name('results');

    Route::view('/routine', 'examination.routine')->name('routine');

    Route::view('/notice', 'examination.notice')->name('notice');

    Route::view('/question-papers', 'examination.question_papers')->name('question_papers');

});

/*
|--------------------------------------------------------------------------
| Facilities
|--------------------------------------------------------------------------
*/

Route::prefix('facilities')->name('facilities.')->group(function () {

    Route::view('/library', 'facilities.library')->name('library');

    Route::view('/hostel', 'facilities.hostel')->name('hostel');

    Route::view('/sports', 'facilities.sports')->name('sports');

    Route::view('/laboratory', 'facilities.laboratory')->name('laboratory');

    Route::view('/computer-centre', 'facilities.computer_centre')->name('computer_centre');

});

/*
|--------------------------------------------------------------------------
| IQAC
|--------------------------------------------------------------------------
*/

Route::prefix('iqac')->name('iqac.')->group(function () {

    Route::view('/members', 'iqac.members')->name('members');

    Route::view('/minutes', 'iqac.minutes')->name('minutes');

    Route::view('/reports', 'iqac.reports')->name('reports');

    Route::view('/aqar', 'iqac.aqar')->name('aqar');

});


/*
|--------------------------------------------------------------------------
| Student Services
|--------------------------------------------------------------------------
*/

Route::prefix('student-services')->name('student.')->group(function () {

    Route::view('/services', 'student.services')->name('services');

    Route::view('/counselling', 'student.counselling')->name('counselling');

    Route::view('/scholarships', 'student.scholarships')->name('scholarships');

    Route::view('/grievance-redressal', 'student.grievance_redressal')->name('grievance_redressal');

});


/*
|--------------------------------------------------------------------------
| IQAC 
|--------------------------------------------------------------------------
*/

Route::prefix('iqac')->name('iqac.')->group(function () {

    Route::view('/forms', 'iqac.aqar_minutes')->name('forms');
     Route::view('/ssr', 'iqac.ssr')->name('ssr');
     Route::view('/reports', 'iqac.reports')->name('reports');
     Route::view('/minutes', 'iqac.minutes')->name('minutes');
     Route::view('/cells', 'iqac.cells')->name('cells');

   });



   /*
|--------------------------------------------------------------------------
| Course 
|--------------------------------------------------------------------------
*/

Route::prefix('course')->name('course.')->group(function () {
    Route::view('/add-on-courses', 'course.add_on_courses')->name('add_on_courses');
});