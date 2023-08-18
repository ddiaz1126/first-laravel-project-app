<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    return view('welcome'); 
});
// //     // Debugbar::info('INFO'); # can be info, error, warning, addMessage as function
// //     // Debugbar::startMeasure('Wohoo', 'Rendering our first message.') # shows time to boot messages
// //     // try{
// //     //     throw new Exception('Try Message!');   
// //     // } catch (Exception $e) {
// //     //     Debugbar::addException($e);
// //     // }

// //     // dd(config('services.mailgun.domain'));
    


// Route::get('/blog', [PostsController::class, 'index']);

// Route::resource('/blog', PostsController::class);

// Route::get('/codewithdavid', function () {
//     return view('codewithdavid');
// });

/*
    GET - Request a resource
    POST - Create a new resource
    PUT - Update a resource
    PATCH - Modify a resource
    DELETE - Delete a resource
    OPTIONS - Ask the server which verbs are allowed

*/

// Get
// GET
// Route::get("/blog", [PostsController::class, 'index'])->name('blog.index');
// Route::get('/blog/{id}', [PostsController::class, 'show'])->name('blog.show');
// // Route::get('/blog/{id}', [PostsController::class, 'show'])->whereNumber('id');
// ## for characters and numerical values
// // Route::get('/blog/{id}/{name}', [PostsController::class, 'show'])
// //     ->whereNumber('id')
// //     ->whereAlpha('name');        

// // POST
// Route::get('/blog/create', [PostsController::class, 'create'])->name('blog.create');
// Route::post('/blog', [PostsController::class, 'store'])->name('blog.store');

// // PUT OR PATCH
// Route::get('/blog/{id}/edit', [PostsController::class, 'edit'])->name('blog.edit');
// Route::patch('/blog/{id}', [PostsController::class, 'update'])->name('blog.update');

// // DELETE
// Route::delete('/blog/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');

// Route::prefix('/blog') ->group(function () {
//     Route::get("/", [PostsController::class, 'index'])->name('blog.index');
//     Route::get('/{id}', [PostsController::class, 'show'])->name('blog.show');
//     Route::get('/create', [PostsController::class, 'create'])->name('blog.create');
//     Route::post('/', [PostsController::class, 'store'])->name('blog.store');
//     Route::get('/{id}/edit', [PostsController::class, 'edit'])->name('blog.edit');
//     Route::patch('//{id}', [PostsController::class, 'update'])->name('blog.update');
//     Route::delete('/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');
// });

// PUT ORP
    ## Route for invoke method
// Route::get('/', HomeController::class);
// Multiple HTTP verbs
// Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
// Route::any('/blog', [PostsController::class, 'index']);

// Route::view('/blog', 'blog.index', ['name' => 'Code With Dary']);

## Fallback routes (must be after prefix*)
Route::fallback(FallbackController::class);
