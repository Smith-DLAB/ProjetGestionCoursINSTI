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

Route::get('/', function () 
{
    return view('welcome');
})->name('home | Laravel');

Route::get('/homefiche', function ()
{
	return view('gestionDeroulementCours/ficheDeroulementCours');
})->name('fiche_Deroulement_Cours');

Route::get('/accueil', function()
{
	return view('gestionDeroulementCours/accueil');
})->name('accueil');

Route::get('/dashboard', function ()
{
	return view('gestionDeroulementCours/dashboard');
})->name('dashboard');

Route::get('/profile', function ()
{
	return view('gestionDeroulementCours/profile');
})->name('profile');
