<?php

use App\Http\Controllers\usercontroller;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ufccontroller;
use App\Http\Controllers\professeurcontroller;
use App\Http\Controllers\projetcontroller;
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

/*Route::get('/', function () {
    return view('index');
});*/

      /* Route::get('/', function () {
            return view('robot');
        });*/


//VIDEO-CONFERENCE  
Route::get('video/conference/{id}',[projetcontroller::class,'vide_conference'])  ;    

//USER
Route::get('etudiant/create',[usercontroller::class,'create']);
Route::post('etudiant/add_user',[MailController::class,'add_user']);
Route::get('user/user_securite',[usercontroller::class,'user_securite']);
Route::get('user/verification_security',[usercontroller::class,'verification_security']);
Route::get('user/for_login_user',[usercontroller::class,'for_login_user']);
Route::post('user/login_user',[MailController::class,'login_user']);

//UFC
Route::get('ufc/create',[ufccontroller::class,'create']);
Route::post('ufc/store',[ufccontroller::class,'store']);

//PROFESSEUR
Route::get('prof/create',[professeurcontroller::class,'create']);
Route::post('prof/add_prof',[MailController::class,'add_prof']);
Route::get('prof/create_security',[professeurcontroller::class,'create_security']);
Route::get('prof/verification_security_prof',[professeurcontroller::class,'security_prof']);
Route::get('prof/create_prof_log',[professeurcontroller::class,'create_prof_log']);
Route::post('prof/login_prof',[MailController::class,'login_prof']);

//SESSION
Route::get('session/destroy_session_user_pre',[MailController::class,'destroy_session_user_pre']);
Route::get('session/destroy_session_user_post',[MailController::class,'destroy_session_user_post']);
Route::get('session/destroy_session_prof_pre',[MailController::class,'destroy_session_prof_pre']);
Route::get('session/destroy_session_prof_post',[MailController::class,'destroy_session_prof_post']);


//
Route::get('projet/papa',[projetcontroller::class,'papa']);
Route::get('projet/home',[projetcontroller::class,'create']);

Route::get('projet/home_original', function () {
    return view('projet.home');
});

Route::get('projet/publication',[projetcontroller::class,'publication']);
Route::post('projet/add_publication',[projetcontroller::class,'add_publication']);
Route::get('projet/formulaire_commentaire/{id}',[projetcontroller::class,'formulaire_commentaire']);

Route::get('projet/add_comment',[projetcontroller::class,'add_commentaire']);
Route::get('projet/seguir/{id}',[projetcontroller::class,'seguir']);
Route::get('projet/for_sous_resp',[projetcontroller::class,'formulaire_sous_reponse']);
Route::get('projet/sou_reponse/{id}',[projetcontroller::class,'sous_reponse']);
Route::get('projet/store_comment',[projetcontroller::class,'store_response']);
Route::get('projet/perfil/{id}',[projetcontroller::class,'perfil']);
Route::post('projet/edit_user/{id}',[projetcontroller::class,'edit_user']);
Route::post('projet/edit_prof/{id}',[projetcontroller::class,'edit_prof']);


//SERACH
Route::post('projet/search1',[projetcontroller::class,'search1'])->name('projet/search1');
Route::get('projet/profil_inta/{id}',[projetcontroller::class,'profil_inta']);
Route::post('projet/search2',[projetcontroller::class,'search2'])->name('projet/search2');
Route::get('projet/profil_inta2/{id}',[projetcontroller::class,'profil_inta2']);

//LIKES

Route::get('projet/like',[projetcontroller::class,'like']);


//MESSAGE PRIVADO
Route::get('projet/msg_priv/{id}',[projetcontroller::class,'msg_priv']);
Route::post('projet/add_comment_priv',[projetcontroller::class,'add_comment_priv']);

Route::get('projet/msg_priv2/{id}',[projetcontroller::class,'msg_priv_2']);
Route::post('projet/add_comment_priv_2',[projetcontroller::class,'add_comment_priv_2']);

Route::get('projet/message_priv_show',[projetcontroller::class,'message_priv_show_prof']);
Route::get('projet/message_priv_show_user',[projetcontroller::class,'message_priv_show_user']);


//Route::get('projet/message_priv_show/{id}',[projetcontroller::class,'message_priv_show']);


//CHAT PRIVE

Route::get('projet/chat_priv_prof/{id}',[projetcontroller::class,'chat_priv_prof_reviz']);

//AFFICHAGE DES IMAGES-PUBLICATION

Route::get('projet/imagex/{id}',[projetcontroller::class,'imagex']);


//Route::get('projet/chat_priv_prof',[projetcontroller::class,'chat_priv_prof']);





