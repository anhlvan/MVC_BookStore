<?php
// App/Routes/Web.php
use App\Core\Router;

$router = new Router();

// Authen
$router->get('/auth/login', 'AuthenController@Login');
$router->post('/auth/login', 'AuthenController@Login');
$router->get('/auth/register', 'AuthenController@Register');
$router->get('/auth/logout', 'AuthenController@Logout');


// User
$router->get('/', 'DashboardController@Index');
$router->get('/dashboard', 'DashboardController@Index');
$router->get('/user', 'UserController@Index');
$router->get('/user/page/{page}', 'UserController@Index');

$router->get('/user/create', 'UserController@Create');
$router->post('/user/create', 'UserController@Create');

$router->get('/user/edit/{id}', 'UserController@Edit');
$router->post('/user/edit/{id}', 'UserController@Edit');

$router->delete('/user/delete/{id}', 'UserController@Delete');


// Role
$router->get('/role', 'RoleController@Index');
$router->get('/role/page/{page}', 'RoleController@Index');

$router->get('/role/create', 'RoleController@Create');
$router->post('/role/create', 'RoleController@Create');

$router->get('/role/edit/{id}', 'RoleController@Edit');
$router->post('/role/edit/{id}', 'RoleController@Edit');

$router->delete('/role/delete/{id}', 'RoleController@Delete');


// Book Category
$router->get('/book-category', 'BookCategoryController@Index');
$router->get('/book-category/page/{page}', 'BookCategoryController@Index');

$router->get('/book-category/create', 'BookCategoryController@Create');
$router->post('/book-category/create', 'BookCategoryController@Create');

$router->get('/book-category/edit/{id}', 'BookCategoryController@Edit');
$router->post('/book-category/edit/{id}', 'BookCategoryController@Edit');

$router->delete('/book-category/delete/{id}', 'BookCategoryController@Delete');

// Book
$router->get('/book', 'BookController@Index');
$router->get('/book/page/{page}', 'BookController@Index');

$router->get('/book/create', 'BookController@Create');
$router->post('/book/create', 'BookController@Create');

$router->get('/book/edit/{id}', 'BookController@Edit');
$router->post('/book/edit/{id}', 'BookController@Edit');

$router->delete('/book/delete/{id}', 'BookController@Delete');

// Order
$router->get('/order', 'OrderController@Index');
$router->get('/order/page/{page}', 'OrderController@Index');

$router->get('/order/detail/{id}', 'OrderController@Detail');
$router->get('/order/detail/{id}/page/{page}', 'OrderController@Detail');

$router->post('/order/approve/{id}', 'OrderController@UpdateStatus');
$router->delete('/order/delete/{id}', 'OrderController@Delete');

$router->run();