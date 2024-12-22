<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Sarjana Terapan']);
});

Route::get('/dosen', function () {
    return view('dosen', ['title' => 'Dosen']);
});

Route::get('/visimisi', function () {
    return view('visimisi', ['title' => 'Visi & Misi']);
});

Route::get('/matkul', function () {
    return view('matkul', ['title' => 'Struktur Mata Kuliah']);
});

Route::get('/ruangkelas', function () {
    return view('ruangkelas', ['title' => 'Ruang Kelas']);
});

Route::get('/magang2semester', function () {
    return view('magang2semester', ['title' => 'Magang 2 Semester']);
});

Route::get('/prestasi', function () {
    return view('prestasi', ['title' => 'Prestasi & Penghargaan']);
});

Route::get('/jalurlulus', function () {
    return view('jalurlulus', ['title' => 'Jalur Kelulusan']);
});

Route::get('/profillulusan', function () {
    return view('profillulusan', ['title' => 'Profil Lulusan']);
});

Route::get('/timoperasional', function () {
    return view('timoperasional', ['title' => 'Tim Operasional']);
});

Route::get('/alumni', function () {
    return view('alumni', ['title' => 'Cerita Alumni']);
});

Route::get('/kontak', function () {
    return view('kontak', ['title' => 'Kontak']);
});

Route::get('/plo', function () {
    return view('plo', ['title' => 'Program Learning Outcome']);
});

Route::get('/clo', function () {
    return view('clo', ['title' => 'Course Learning Outcome']);
});

Route::get('/lab', function () {
    return view('lab', ['title' => 'Laboratorium Praktikum']);
});