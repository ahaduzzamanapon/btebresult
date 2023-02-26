<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\manager;
use App\Http\Controllers\student;
use App\Http\Controllers\secondcst;
use App\Http\Controllers\thirdcst;
use App\Http\Controllers\forthcst;
use App\Http\Controllers\mainadmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// admin

Route::get('/admin', [mainadmin::class, 'admin']);
Route::get('/allresult', [mainadmin::class, 'allresult']);
Route::get('/allresultmanage', [mainadmin::class, 'allresultmanage']);


Route::post('/allresultpdf', [mainadmin::class, 'allresultpdf']);


// employ first cst
Route::get('/firstcstmanage', [admincontroller::class, 'firstcstmanage']);
Route::get('/', [admincontroller::class, 'index']);
Route::get('/welcome', [admincontroller::class, 'welcome']);
Route::get('/edit/{roll}', [admincontroller::class, 'edit']);
Route::get('/firstcstpdf', [admincontroller::class, 'firstcstpdf']);
Route::get('/firstcstfees', [admincontroller::class, 'firstcstfees']);
Route::post('/firstcstpdfi', [admincontroller::class, 'firstcstpdfi']);
Route::post('/fees', [admincontroller::class, 'fees']);
Route::post('/editresult/{roll}', [admincontroller::class, 'editresult']);
Route::get('/delletdata/{roll}', [admincontroller::class, 'delletdata']);
// employ first cst end


// auth start
Route::post('/employeelogin', [authcontroller::class, 'employeelogin']);


// manager

Route::get('/managerdashboard', [manager::class, 'managerdashboard']);
Route::get('/paid/{roll}', [manager::class, 'paid']);
Route::post('/managerdashboards', [manager::class, 'managerdashboards']);

// student
Route::get('/student', [student::class, 'student']);
Route::get('/allstudent', [student::class, 'allstudent']);
Route::post('/details', [student::class, 'details']);
Route::post('/allresltsp', [student::class, 'allresltsp']);




// second cst
Route::get('/secondcst', [secondcst::class, 'secondcstd']);
Route::get('/secondcstmanage', [secondcst::class, 'secondcstmanage']);
Route::get('/secondcstpdf', [secondcst::class, 'secondcstpdf']);
Route::get('/secondcstfees', [secondcst::class, 'secondcstfees']);
Route::post('/secondcstfeesi', [secondcst::class, 'secondcstfeesi']);
Route::post('/secondcstpdfi', [secondcst::class, 'secondcstpdfi']);
Route::get('/editsecondcst/{roll}', [secondcst::class, 'edit']);
Route::post('/editsecondcstresult/{roll}', [secondcst::class, 'editsecondcstresult']);
Route::get('/delletsecondcstdata/{roll}', [secondcst::class, 'delletsecondcstdata']);
Route::get('/secondcstmanual', [secondcst::class, 'secondcstmanual']);
Route::post('/secondcstresultmanual', [secondcst::class, 'secondcstresultmanual']);
Route::get('/downloadmid/{file}', [secondcst::class, 'downloadmid']);
Route::get('/downloadadmit/{file}', [secondcst::class, 'downloadadmit']);

// third cst
Route::get('/thirdcst', [thirdcst::class, 'thirdcstd']);
Route::get('/thirdcstmanage', [thirdcst::class, 'thirdcstmanage']);
Route::get('/thirdcstpdf', [thirdcst::class, 'thirdcstpdf']);
Route::get('/thirdcstfees', [thirdcst::class, 'thirdcstfees']);
Route::post('/thirdcstfeesi', [thirdcst::class, 'thirdcstfeesi']);
Route::post('/thirdcstpdfi', [thirdcst::class, 'thirdcstpdfi']);
Route::get('/editthirdcst/{roll}', [thirdcst::class, 'edit']);
Route::post('/editthirdcstresult/{roll}', [thirdcst::class, 'editthirdcstresult']);
Route::get('/delletthirdcstdata/{roll}', [thirdcst::class, 'delletthirdcstdata']);
Route::get('/thirdcstmanual', [thirdcst::class, 'thirdcstmanual']);
Route::post('/thirdcstresultmanual', [thirdcst::class, 'thirdcstresultmanual']);
Route::get('/downloadmid/{file}', [thirdcst::class, 'downloadmid']);
Route::get('/downloadadmit/{file}', [thirdcst::class, 'downloadadmit']);



// forthcst
Route::get('/forthcst', [forthcst::class, 'forthcstd']);
Route::get('/forthcstmanage', [forthcst::class, 'forthcstmanage']);
Route::get('/forthcstpdf', [forthcst::class, 'forthcstpdf']);
Route::get('/forthcstfees', [forthcst::class, 'forthcstfees']);
Route::post('/forthcstfeesi', [forthcst::class, 'forthcstfeesi']);
Route::post('/forthcstpdfi', [forthcst::class, 'forthcstpdfi']);
Route::get('/editforthcst/{roll}', [forthcst::class, 'edit']);
Route::post('/editforthcstresult/{roll}', [forthcst::class, 'editforthcstresult']);
Route::get('/delletforthcstdata/{roll}', [forthcst::class, 'delletforthcstdata']);
Route::get('/forthcstmanual', [forthcst::class, 'forthcstmanual']);
Route::post('/forthcstresultmanual', [forthcst::class, 'forthcstresultmanual']);
Route::get('/downloadmid/{file}', [forthcst::class, 'downloadmid']);
Route::get('/downloadadmit/{file}', [forthcst::class, 'downloadadmit']);



