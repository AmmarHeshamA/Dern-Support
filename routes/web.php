<?php

use App\Http\Controllers\BillingDetailController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ServiceController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Service;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\QueryException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    try {
        $categorys = Category::all();
        $comments = Comment::all();
        $services = Service::all();
    } catch (QueryException $e) {
        $errorMessage = $e->getMessage();
        return response()->view('frontend.errors.error404', ['errorMessage' => $errorMessage], 500);
    }
    return view('frontend.home', compact('categorys', 'comments', 'services'));
});


Route::get('/home', function () {
    try {
        $categorys = Category::all();
        $comments = Comment::all();
        $services = Service::all();
    } catch (QueryException $e) {
        $errorMessage = $e->getMessage();
        return response()->view('frontend.errors.error404', ['errorMessage' => $errorMessage], 500);
    }
    return view('frontend.home', compact('categorys', 'comments', 'services'));
})->name('front.home');



Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/services', function () {
    try {
        $services = Service::all();
    } catch (QueryException $e) {
        $errorMessage = $e->getMessage();
        return response()->view('frontend.errors.error404', ['errorMessage' => $errorMessage], 500);
    }
    return view('frontend.services', compact('services'));
});

Route::get('/service/{id}', [FrontController::class, 'show'])->name('service.show');


Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/check_out', function () {
    return view('frontend.checkout');
});

Route::get('/order_confirmation', function () {
    return view('frontend.order-confirmation');
})->name('/order_confirmation');

Route::get('/shop', function () {
    try {
        $categorys = Category::all();
    } catch (QueryException $e) {
        $errorMessage = $e->getMessage();
        return response()->view('frontend.errors.error404', ['errorMessage' => $errorMessage], 500);
    }
    return view('frontend.shop-category', ['categorys' => $categorys]);
});



Route::middleware(['auth', 'usertype:admin'])->group(function () {

    // Messages
    Route::get('/admin/dashboard/messages', [MessageController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/dashboard', [MessageController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', [MessageController::class, 'index'])->name('admin.dashboard');



    Route::get('/admin/dashboard/messages/trashed', [MessageController::class, 'trashed_message'])->name('admin.dashboard.trashed');

    Route::put('/admin/dashboard/messages/restore/{id}', [MessageController::class, 'restore'])->name('admin.dashboard.restore');

    Route::delete('/admin/dashboard/messages/forceDelete/{id}', [MessageController::class, 'forceDelete'])->name('admin.dashboard.forceDelete');


    Route::get('/admin/dashboard/messages/{id}', [MessageController::class, 'show'])->name('admin.dashboard.show');

    Route::delete('/admin/dashboard/messages/{id}', [MessageController::class, 'destroy'])->name('admin.dashboard.delete');


    // Categories

    Route::get('/admin/dashboard/categories', [CategoryController::class, 'index'])->name('admin.categorys.index');

    Route::get('/admin/dashboard/categories/trashed', [CategoryController::class, 'trashed_message'])->name('admin.category.trashed');

    Route::put('/admin/dashboard/categories/restore/{id}', [CategoryController::class, 'restore'])->name('admin.category.restore');

    Route::delete('/admin/dashboard/categories/forceDelete/{id}', [CategoryController::class, 'forceDelete'])->name('admin.category.forceDelete');


    Route::get('/admin/dashboard/categories/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/admin/dashboard/categories/store', [CategoryController::class, 'store'])->name('admin.category.store');

    Route::get('/admin/dashboard/categories/{category}', [CategoryController::class, 'show'])->name('admin.category.show');

    Route::get('/admin/dashboard/categories/edit/{category}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/admin/dashboard/categories/update/{category}', [CategoryController::class, 'update'])->name('admin.category.update');

    Route::delete('/admin/dashboard/categories/delete/{category}', [CategoryController::class, 'destroy'])->name('admin.category.delete');

    // Comments

    Route::get('/admin/dashboard/comments', [CommentController::class, 'index'])->name('admin.comment.index');


    Route::get('/admin/dashboard/comments/trashed', [CommentController::class, 'trashed_message'])->name('admin.comment.trashed');

    Route::put('/admin/dashboard/comments/restore/{id}', [CommentController::class, 'restore'])->name('admin.comment.restore');

    Route::delete('/admin/dashboard/comments/forceDelete/{id}', [CommentController::class, 'forceDelete'])->name('admin.comment.forceDelete');

    Route::get('/admin/dashboard/comments/create', [CommentController::class, 'create'])->name('admin.comment.create');
    Route::post('/admin/dashboard/comments/store', [CommentController::class, 'store'])->name('admin.comment.store');

    Route::get('/admin/dashboard/comments/{comment}', [CommentController::class, 'show'])->name('admin.comment.show');

    Route::get('/admin/dashboard/comments/edit/{comment}', [CommentController::class, 'edit'])->name('admin.comment.edit');
    Route::put('/admin/dashboard/comments/update/{comment}', [CommentController::class, 'update'])->name('admin.comment.update');

    Route::delete('/admin/dashboard/comments/delete/{comment}', [CommentController::class, 'destroy'])->name('admin.comment.delete');

    // Services

    Route::get('/admin/dashboard/services', [ServiceController::class, 'index'])->name('admin.service.index');

    Route::get('/admin/dashboard/services/trashed', [ServiceController::class, 'trashed_message'])->name('admin.service.trashed');

    Route::put('/admin/dashboard/services/restore/{id}', [ServiceController::class, 'restore'])->name('admin.service.restore');

    Route::delete('/admin/dashboard/services/forceDelete/{id}', [ServiceController::class, 'forceDelete'])->name('admin.service.forceDelete');


    Route::get('/admin/dashboard/services/create', [ServiceController::class, 'create'])->name('admin.service.create');
    Route::post('/admin/dashboard/services/store', [ServiceController::class, 'store'])->name('admin.service.store');

    Route::get('/admin/dashboard/services/{service}', [ServiceController::class, 'show'])->name('admin.service.show');

    Route::get('/admin/dashboard/services/edit/{service}', [ServiceController::class, 'edit'])->name('admin.service.edit');
    Route::put('/admin/dashboard/services/update/{service}', [ServiceController::class, 'update'])->name('admin.service.update');

    Route::delete('/admin/dashboard/services/delete/{service}', [ServiceController::class, 'destroy'])->name('admin.service.delete');



    // Details

    Route::get('/admin/dashboard/details', [BillingDetailController::class, 'index'])->name('admin.detail.index');

    Route::get('/admin/dashboard/details/trashed', [BillingDetailController::class, 'trashed_message'])->name('admin.detail.trashed');

    Route::put('/admin/dashboard/details/restore/{id}', [BillingDetailController::class, 'restore'])->name('admin.detail.restore');

    Route::delete('/admin/dashboard/details/forceDelete/{id}', [BillingDetailController::class, 'forceDelete'])->name('admin.detail.forceDelete');

    Route::get('/admin/dashboard/details/{billingDetail}', [BillingDetailController::class, 'show'])->name('admin.detail.show');

    Route::delete('/admin/dashboard/details/delete/{billingDetail}', [BillingDetailController::class, 'destroy'])->name('admin.detail.delete');

    Route::delete('/admin/dashboard/details/conform/{billingDetail}', [BillingDetailController::class, 'conform'])->name('admin.detail.conform');
});

Route::post('/contact', [MessageController::class, 'store'])->name('message.store');

Route::post('/check_out', [BillingDetailController::class, 'store'])->name('billingdetail.store');







require __DIR__ . '/auth.php';
