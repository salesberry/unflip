<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctypeController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ItemController;
use App\Models\doctype;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\PHP;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login',[AdminController::class, 'login']);
Route::post('admin/auth',[AdminController::class, 'auth'])->name('admin.auth');

Route::group(['middleware'=>'admin_auth'],function(){
    
    Route::get('admin',[AdminController::class, 'index']);
    Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->put('ADMIN_ID');
        return redirect('admin/login');
    });
    Route::get('admin/module/{slug}',[ModuleController::class, 'module_doctype_list']);     
    try{
        $doctypes = doctype::all();        
        foreach ($doctypes as $doctype) {            
            if (!empty($doctype->controller_action)) {                
                Route::resource('admin/doctype/'. $doctype->doctype_slug, $doctype->controller_action);
            }
            else {
                Route::get('admin',[AdminController::class, 'index']);
            }
        }
    } catch (Exception $e){
        echo '***************' . PHP_EOL;
        echo 'Error Fetching Database pages:'. PHP_EOL;
        echo $e->getMessage() . PHP_EOL;
        echo '***************' . PHP_EOL;

    }

});
