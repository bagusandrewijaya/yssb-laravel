<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Lp\Main;
use App\Livewire\Blogs\Singleblogs;
use App\Livewire\About\Aboutus;

Route::get('/', Main::class)->name('main');
Route::get('/singleblogs', Singleblogs::class)->name('singleblogs');
Route::get('/tentang-kami', Aboutus::class)->name('aboutus');