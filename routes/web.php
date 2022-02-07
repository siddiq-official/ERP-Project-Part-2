<?php
 
use Illuminate\Support\Facades\Route;

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
    return view('ourinfo');
});

Auth::routes();


Route::get('/login', 'HomeController@login');
Route::get('/dashbord', 'HomeController@dashbord');
Route::get('/profile', 'HomeController@profile');
Route::get('/allpage', 'HomeController@allpage');

Route::get('/contacts', 'HomeController@contacts');
Route::get('/contact_edit{x}', 'ContactController@edit');
Route::post('/contactstore', 'ContactController@store');
Route::post('/contactupdate/{x}', 'ContactController@update');


//Route::get('/updates', 'HomeController@updates');
//Route::get('/project_statous', 'HomeController@project_statous');
Route::get('/employe_status', 'HomeController@employe_status');

Route::get('/add_employe', 'HomeController@add_employe');
Route::post('/add_employeinfo', 'EmployeInfoController@store');
Route::post('/update_employeinfo/{x}', 'EmployeInfoController@store');

Route::get('/invoice', 'HomeController@invoice');
Route::get('/bill', 'HomeController@bill');
Route::get('/money_receipt', 'HomeController@money_receipt');
Route::get('/transaction', 'HomeController@transaction');
Route::get('/general_expenses', 'HomeController@general_expenses');
Route::get('/stock_sheet', 'HomeController@stock_sheet');

Route::get('/merchant_list', 'HomeController@merchant_list');
Route::get('/addmerchant', 'HomeController@addmerchant');
Route::post('/add_peopleinfo', 'PeopleInfoController@store');

Route::get('/purchase', 'HomeController@purchase');
Route::get('/add_project', 'HomeController@add_project');
Route::post('/projectstore', 'ProjectController@store');
Route::get('/project_edit{x}', 'HomeController@edit_project');
Route::post('/editproject/{x}', 'ProjectController@update');

Route::get('/add_client', 'HomeController@add_client');
Route::post('/add_client', 'ClientController@store');

Route::get('/client_list', 'HomeController@client_list');
Route::get('/project_list', 'HomeController@project_list');
Route::get('/edit_Client_info', 'HomeController@edit_Client_info');
Route::get('/client_document_upload', 'HomeController@client_document_upload');
//Route::post('/add_client/{x}', 'ClientController@store');

Route::get('/payment', 'HomeController@payment');
Route::post('/add_payment', 'PaymentController@store');



//add_payment
Route::get('/home', 'HomeController@index');
Route::get('/myreg', 'HomeController@myreg');

/*Route::get('mylogin', function () {
    return view('login');
});

Route::get('myreg', function () {
    return view('reg');
}); */