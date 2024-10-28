<?php
use Illuminate\Support\Facades\Route;

Route::get('/set-language/{lang}', function ($lang) {
    $supportedLanguages = config('multilanguage.supported_languages');

    if (in_array($lang, $supportedLanguages)) {
        session(['locale' => $lang]);
    }

    return redirect()->back();
})->name('set.language');