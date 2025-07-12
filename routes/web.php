<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $schema = [
      '@context' => 'https://schema.org',
      '@type' => 'Person',
      'name' => 'Lê Văn An',
      'jobTitle' => 'Lập Trình Viên Laravel',
      'url' => url('/'),
      'image' => asset('images/Gemini_Generated_Image_jbsi36jbsi36jbsi.webp'),
      'sameAs' => [
        'https://github.com/andz184',
        'https://linkedin.com/in/levanan',
        'https://www.facebook.com/lvaann3418'
      ],
      'knowsAbout' => ["Laravel", "PHP", "MySQL", "Backend Development", "RESTful APIs", "WebRTC", "n8n"]
    ];
    return view('welcome', compact('schema'));
});

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');
