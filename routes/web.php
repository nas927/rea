<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ActuController;
use App\Http\Controllers\SimulationController;
use App\Http\Controllers\SubDropController;
use App\Http\Controllers\SimulationSendController;
use App\Http\Controllers\SimulationPageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UnsubscribeController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ActualiteFormController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about/{name}', [SubDropController::class, 'index']);
Route::get('/actualite', [ActuController::class, 'index']);
Route::get('/actu/{id}', [ActualiteFormController::class, 'index']);
Route::get('/simulation', [SimulationController::class, 'index'])->name('simulation');
Route::post('/send', [SimulationSendController::class, 'index'])->name('send');
Route::get('/page/{id}', [SimulationPageController::class, 'index'])->name('page');
Route::post('/contact', [ContactController::class, 'index']);
Route::get('/unsubscribe/{hash}', [UnsubscribeController::class, 'index']);
Route::get('/contact-form', [ContactFormController::class, 'index'])->name('contact');
Route::post('/contact-form', [ContactFormController::class, 'sent'])->name('sent');
Route::view('/cgu', 'politique.cgu');
Route::view('/cgv', 'politique.cgv');
Route::view('/vie-prive', 'politique.vie-prive');
Route::view('/cookies', 'politique.cookies');
Route::view('/mention', 'politique.mention');
Route::view('/faq', 'politique.faq');
Route::view('/isolation', 'politique.travaux.isolation');
Route::view('/menuiserie', 'politique.travaux.menuiserie');
Route::view('/chauffage', 'politique.travaux.chauffage');
Route::view('/panneau', 'politique.travaux.panneau');

Route::get('/site.json', function () {
    return response()->json([
        "name" => "Nom de Votre Site",
        "short_name" => "Court Nom",
        "description" => "Une brève description de votre site.",
        "start_url" => url('/'), // Utilise le helper url() pour générer l'URL de démarrage
        "display" => "standalone",
        "background_color" => "#ffffff",
        "theme_color" => "#000000",
        "orientation" => "portrait",
        "icons" => [
            [
                "src" => asset('icons/icon-192x192.png'),
                "sizes" => "192x192",
                "type" => "image/png"
            ],
            [
                "src" => asset('icons/icon-512x512.png'),
                "sizes" => "512x512",
                "type" => "image/png"
            ]
        ]
    ]);
})->name('manifest');
