<?php

Route::get('/login', function(){
    return 'Login';
})->name('login');

//Grupo de rotas opção 1

/*Route::middleware([])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::namespace('Admin')->group(function(){
            Route::name('admin.')->group(function(){
                Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
                Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
                Route::get('/produtos', 'TesteController@teste')->name('produtos');
                Route::get('/', function(){
                    return redirect ()->route('admin.dashboard');
                })->name('home');
            });

        });
        
    });
});*/

//Grupo de rotas opção 2
Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function(){
    Route::name('admin.')->group (function(){
        Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
        Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
        Route::get('/produtos', 'TesteController@teste')->name('produtos');
        Route::get('/', function(){
            return redirect ()->route('admin.dashboard');
        })->name('home');
    });
    
});








//redirecionamento2
Route::redirect('/rota1', '/rota2');

//redirecionamento1
// Route::get('/rota1', function(){
//     return redirect('/rota2');
// });
Route::get('/rota2', function(){
    return 'rota2';
});



//Paramêtros opcionais
Route::get('/produtos/{idProduto?}', function  ($idProduto ='') {
    return "Produto : {$idProduto}";
});

//Paramêtros em rotas tem a necessidade de colocar o mesmo nome do parametro passado!!
Route::get('/categoria/{flag}/posts', function  ($flag) {
    return "Categoria : {$flag}";
});

//Paramêtros em rotas sem ter a necessidade de colocar o mesmo nome do parametro passado!!
Route::get('/categorias/{flag}', function  ($m1) {
    return "Categoria : {$m1}";
});


//Rota match você pode definir oque será aceitavel nas requisições http
Route::match(['put', 'post'], '/match', function(){ 
    return'match';
});

//Rota Any aceita diferentes tipos de requisições http
Route::any('/any', function(){ 
    return'any';
});

Route::get('/contato', function(){
    return'contato';
});

Route::get('/', function () {
    $helloWord ='Hello Word';

    return view('welcome', compact('helloWord'));
});
