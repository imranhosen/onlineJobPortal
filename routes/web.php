<?php

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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'FrontIndexController@showHome');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/job-post/add-job-post', 'JobController@showJobPostForm');
Route::post('/job-post/new-job-post', 'JobController@addJobPost');

Route::get('/category/add-category', 'categoryController@showCategoryForm');
Route::post('/category/new-category', 'categoryController@saveCategoryInfo');
Route::get('/category/manage-category', 'categoryController@manageCategoryInfo');
Route::get('/category/unpublished-category/{id}', 'categoryController@unpublishedCategoryInfo');
Route::get('/category/published-category/{id}', 'categoryController@publishedCategoryInfo');
Route::get('/category/edit-category/{id}', 'categoryController@editCategoryInfo');
Route::get('/category/delete-category/{id}', 'categoryController@deleteCategoryInfo');
Route::post('/category/update-category', 'categoryController@updateCategoryInfo');

Route::get('/category-content/job-category-content/{id}', 'JobCategoryContentController@showJobCategoryContent');
Route::get('/job/job-details-content/{id}', 'JobDetailsController@showJobDeatilsContent');
Route::get('/job/job-apply-success/{id}', 'JobDetailsController@showSuccessMessageForm');



Route::get('/job-post/manage-job-post', 'JobController@manageJobPost');
Route::get('/job-post/unpublished-job-post/{id}', 'JobController@unpublishedJobInfo');
Route::get('/job-post/published-job-post/{id}', 'JobController@publishedJobInfo');
Route::get('/job-post/unhighlighted-job-post/{id}', 'JobController@unhighlightedJobInfo');
Route::get('/job-post/highlighted-job-post/{id}', 'JobController@highlightedJobInfo');
Route::get('/job-post/edit-job-post/{id}', 'JobController@editJobInfo');
Route::get('/job-post/delete-job-post/{id}', 'JobController@deleteJobInfo');
Route::post('/job-post/update-job-post', 'JobController@updateJobInfo');


Route::get('/about/about-us', 'AboutController@showAboutUsPage');
Route::get('/programs/our-programs', 'ProgramController@showProgramPage');
Route::get('/contact/contact-us', 'ContactCotroller@showContactUsPage');


Route::get('/search/new-search', 'SearchController@showSearchPage');


Route::get('/employer/create-account', 'EmployerController@showCreateAccountPage');
Route::post('/employer/new-employer', 'EmployerController@newEmployer');
Route::get('/employer/employer-dashboard', 'EmployerController@showDashBoardPage');
Route::post('/employer/login', 'EmployerController@employerLogin');
Route::get('employer/logout', 'EmployerController@employerLogout');
Route::get('employer/show-job-history', 'EmployerController@showJobHistory');


Route::get('user/user-login', 'UserController@showLoginForm');
Route::get('user/user-new-account', 'UserController@showCreateAccountForm');
Route::post('user/new-user', 'UserController@newUserAccount');
Route::get('user/user-dashboard', 'UserController@showUserDashboard');
Route::post('/employee/login', 'UserController@employeeLogin');
Route::post('/employee/login-apply', 'UserController@employeeLoginApply');
Route::get('user/logout', 'UserController@employeeLogout');
Route::get('user/user-login-apply', 'UserController@showLoginApplyForm');


Route::get('/about/add-about', 'AboutController@addAbout');
Route::post('/about/new-about', 'AboutController@saveAboutInfo');
Route::get('/about/edit-about', 'AboutController@editAboutInfo');
Route::post('/about/update-about', 'AboutController@updateAboutInfo');



Route::get('/program/add-program', 'ProgramController@program');
Route::post('/program/new-program', 'ProgramController@saveProgramInfo');
Route::get('/program/edit-program', 'ProgramController@editProgramInfo');
Route::post('/program/update-program', 'ProgramController@updateProgramInfo');



Route::get('/contact/add-contact', 'ContactCotroller@contact');
Route::post('/contact/new-contact', 'ContactCotroller@saveContactInfo');
Route::get('/contact/edit-contact', 'ContactCotroller@editContactInfo');
Route::post('/contact/update-contact', 'ContactCotroller@updateContactInfo');



Route::get('/social-link/add-social-link', 'SocialLinkController@socilaLink');
Route::post('/social-link/new-social', 'SocialLinkController@savesocilaLinkInfo');
Route::get('/social-link/manage-social-link', 'SocialLinkController@manageSocialLinkInfo');
Route::get('/social-link/edit-social-link/{id}', 'SocialLinkController@editSocialLinkInfo');
Route::get('/social-link/delete-social-link/{id}', 'SocialLinkController@deleteSocialLinkInfo');
Route::post('/social-link/update-social-link', 'SocialLinkController@updateSocialLinkInfo');




