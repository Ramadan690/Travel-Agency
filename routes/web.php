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
    return view('Main');
})->name('main');



Route::get('/Events','EventController@MainEvents')->name('events');

Route::get('/BusTicket','BusController@MainEvents')->name('Busticket');

Route::get('/CarRental','CarController@MainEvents')->name('CarRent');

Route::get('/TourBooking','TourController@MainEvents')->name('Tour');


// Login...
Route::get('/login', function () {
    return view('auth.login');
})->name('login');



Route::get('/register', function () {
    return view('auth.register');
});


Auth::routes();

//No Redirect after LogOut...
Route::group(['middleware' => ['preventBackHistory','auth']], function(){




//Committee
Route::get('/Committee', function(){

	$data = Auth::user();

	    return view('com');
})->name('comt');


//Index...
Route::get('/index', 'HomeController@index')->name('Index');

////////////////





Route::get('/Report/Member', 'UsersController@ReportM')->name('ReportM');
Route::get('/Report/Events', 'EventController@ReportE')->name('ReportE');



///////////////////////////////////////////////////////////////////////////////////////////////

//Profile picture
Route::get('/Profile_Picture','ProfileController@ProfilePicture')->name('Profile_Picture');

//User Consultation...
Route::get('/UserConsultation','UsersController@showUsers')->name('UserConsultation');

//Show all User
Route::get('/UserConsultation/User/show','UsersController@GetUsers')->name('Allusers');

//Add New User
Route::get('/UserConsultation/AddUser',function () {return view('UserConsultation.AddUser');})->name('AddUser');
Route::post('/UserConsultation/AddUser/Upload','UsersController@create')->name('AddUserUpload');

Route::get('/UserConsultation/AddUser/delete','UsersController@Delete')->name('DeleteUser');

Route::get('/UserConsultation/Update/{yo}','UsersController@Select')->name('UpdateUser');
Route::post('/UserConsultation/Update/Updated','UsersController@Update')->name('UpdateUserS1');



//Profile
Route::get('/Profile','ProfileController@index')->name('profile');
Route::post('/Profile/Update/Updated','ProfileController@Update')->name('UpdateProfileS1');




Route::post('/Profile/upload','ProfileController@UploadImage')->name('UpdateprofileImage');
//upload image
Route::post('/Profile_Picture','ProfileController@UploadImage')->name('uploadimage');



/////////////////////////////////////////////////////////////////////////////////////////////////

//Events management
Route::get('/Event',function () {
    return view('Events.UserConsultation');
})->name('product');

Route::get('/Events/CreateEvents',function () {return view('Events.AddUser');})->name('EventsForm');
Route::post('/Events/CreateEvents/create','EventController@create')->name('CreateEvent');
Route::get('/UserConsultation/Events/show','EventController@GetEvents')->name('AllEvents');

Route::get('/Events/Update_Events/{ref}','EventController@Select')->name('UpdateEvents');
Route::post('/Events/Update_Events/update','EventController@Update')->name('UpdateEvents1');

////////////////////////////////////////////////////////////////////////////
Route::get('/Events/delete','EventController@Delete')->name('DeleteEvents');



//////////////////////////////////////////////////////////////////////COMMITTEE


Route::get('/Committee/Events',function () {return view('Committee.UserConsultation');})->name('EventsCom');
Route::post('/Committee/Events/CreateEvents/creating','EventController@createCom')->name('CreateEventCom');
Route::get('/Committee/property/view/Feedbacks','EventController@SendFeedback')->name('SendFeedbacks');


Route::get('/Committee/Events/CreateEvents',function () {return view('Committee.AddUser');})->name('EventsFormCom');
Route::get('/Events/Update_Events/{ref}','EventController@SelectCom')->name('UpdateEvents');
Route::get('/Committee/Events/show','EventController@GetEventsCommitte')->name('AllEventsCOM');



Route::get('/Committee/Feedbacks',function () {return view('Committee.Feedbacks');})->name('FeedbacksCom');
Route::get('/Committee/Feedbacks/show','EventController@GetFeedbacks')->name('AllFeedbacks');


//////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/Committee/property/view/Booking','HotelController@Hotelbooking')->name('HotelBooking');

Route::get('/Committee/property/view/Bus/Booking','BusController@Busbooking')->name('BusBooking');


Route::get('/Committee/property/view/Car/Booking','CarController@Busbooking')->name('CarBooking');

Route::get('/Committee/view/TourK/Booking','TourController@Busbooking')->name('TourBooking');


/////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/Committee/Hotel/view/Booking','HotelController@Mybookings')->name('AllBooking');
Route::get('/Committee/Hotel/view/Booking/Bus','BusController@Mybookings')->name('AllBusBooking');
Route::get('/Committee/Hotel/view/Booking/Car','CarController@Mybookings')->name('AllCarBooking');
Route::get('/Committee/Hotel/view/Booking/Tour','TourController@Mybookings')->name('AllTourBooking');



Route::get('/Committee/Mybooking',function () {return view('Mybooking');})->name('MyBooking');

Route::get('/Committee/Hotel/view/Booking/delete','HotelController@cancelHotel')->name('DeleteBooking');
Route::get('/Committee/Hotel/view/Booking/delete/Bus','BusController@cancelBus')->name('DeleteBusBooking');
Route::get('/Committee/Hotel/view/Booking/delete/car','CarController@cancelCar')->name('DeleteCarBooking');
Route::get('/Committee/Hotel/view/Booking/delete/Tour','TourController@cancelTour')->name('DeleteTourBooking');





Route::get('/Committee/Hotel/view/Booking/update','HotelController@updateBookingHotel')->name('updateBooking');
Route::get('/Committee/Hotel/view/Booking/update/Bus','BusController@updateBookingBus')->name('updateBusBooking');
Route::get('/Committee/Hotel/view/Booking/update/car','CarController@updateBookingCar')->name('updateCarBooking');
Route::get('/Committee/Hotel/view/Booking/update/Tour','TourController@updateBookingTour')->name('updateTourBooking');



//////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/Main/profile','ProfileController@index')->name('profileMain');
Route::get('/Main/profile/Update','ProfileController@UpdateProfile')->name('profileUpdate');


//////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/Events/{name}','EventController@MainEvents')->name('EventSelect');


Route::get('/Events/property/View','EventController@property')->name('PropertyV');

Route::get('/Events/property/View/Favorites','EventController@favorites')->name('PropertySave');

Route::get('/Events/property/Favorites','EventController@favoritesViews')->name('PropertyVFavorites');


/////////////////////////////////////////////////////////////////////////////////////////////////////////



Route::get('/IUKL/Student/show','CarController@GetCars')->name('Allstudents');

Route::get('/IUKL/Student','CarController@showCars')->name('studentsConsultation');
Route::get('/IUKL/Student/AddUser',function () {return view('   Car.AddUser');})->name('Addstudents');

Route::post('/IUKL/Student/Addstudents/Upload','CarController@create')->name('AddCarUpload');

Route::get('/IUKL/Student/AddUser/delete','CarController@Delete')->name('DeleteCar');

Route::get('/CAR/Update/{yo}','CarController@Select')->name('UpdateCar');
Route::post('/IUKL/Student/Update/Updated','CarController@Update')->name('UpdateStudents1');
//////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/IUKL/Bus/show','BusController@GetBus')->name('AllBus');

Route::get('/IUKL/Buses/Bus','BusController@showBus')->name('BusConsultation');

Route::get('/IUKL/Buses/AddUser/delete','BusController@Delete')->name('DeleteBus');

Route::get('/IUKL/Buses/AddUser',function () {return view('   Car.AddUser');})->name('Addstudents');

////////////////////////////////////////////////////////////////////////////////////////////////////////



Route::get('/IUKL/Tour/show','TourController@GetCars')->name('AllTour');

Route::get('/IUKL/Tour/Bus','TourController@showCars')->name('TourConsultation');


Route::get('/IUKL/Tour/AddUser/delete','TourController@Delete')->name('DeleteTour');

Route::get('/IUKL/Tour/AddUser',function () {return view('  Tour.AddUser');})->name('AddTour');

Route::post('/IUKL/tour/Addstudents/Upload','TourController@create')->name('AddTourUpload');


});





// LogOut...
Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('/');
})->name('logout');









