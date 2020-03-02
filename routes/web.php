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

// Route::get('/', function () {
//     return'Olá,mundo!';
// });
// Route::get('/primeira-pagina', function () {
//     return'Sou a primeira página';
// });
// Route::get('/parametros/home', function () {
//     return"Pagina principal parametros";
// });
// Route::get('/parametros/{numero}', function ($numero) {
//     return"Sou a página com paramento. O parametro é{$numero}";
// });
// Route::get('/parametros/{numero}/{segundo}', function ($numero,$segundo) {
//     return"Sou a página com paramento. O parametros são {$numero} e $segundo";
// });
// Route::get('/optional/{numero}/{segundo}/{terceiro?}', function ($numero,$segundo,$terceiro="NADA") {
//     return"Sou a página com paramento. O parametros são {$numero}, $segundo e $terceiro";
// });

Route::get('/meu-primeiro-caminho','NumeroController@numero');

Route::get('/segunda-pagina/{aluno}','NumeroController@segundaPagina');

Route::get('/par-ou-impar/{numero}/{opcional?}','NumeroController@parOuImpar');
        
     

//Route::get('/par-ou-impar/{numero}', function ($numero) {    
    // if($numero%2==0){
    //         return $numero.' é par';
    //     }else{
    //         return $numero.' é impar';
    //     }  
    //return $numero%2 === 0 ? "par":"impar";
 //});

// Route::get('/par-ou-impar/{numero}/{opcional?}', function ($numero,$opcional = NULL) {    
//    if(null ===$opcional){
//        return $numero%2 === 0 ? "par":"impar";
//    }
//    return $opcional*$numero;
//  });
 
