<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $html = "
        <h1>Aplikasi Kontak</h1>
        <div>
            <a href='/contacts'>Kontak</a>
            <a href='/contacts/create'>Kontak Baru</a>
            <a href='/contacts/2'>Tampilkan Kontak</a>
            <a href='/students/Agus'>Agus</a>
            <a href='/companies/Fatui'>Fatui</a>
        </div>
    ";
    return $html;
});

Route::get('/contacts', function () {
    return "<h1><marquee>contact Student Day Programming Web</h1>";
});

Route::get('/contacts/create', function () {
    return "<h1><marquee direction=down>Tambah Kontak</h1>";
});

Route::get('/contacts/{id}', function($id){
    return "Halaman kontak dengan ID".$id;
});

Route::get('/students/{name}', function($name=null){
        return "Nama Lengkap: ".$name;
}); 

Route::get('/admin/contacts/create', function() {
    return "<h1>Tambah Kontak Baru</h1>";
})->name('contacts.create');

Route::get('/companies/{name?}', function($name=null) {
    if($name) {
        return "Nama Perusahaan: " . $name;
    } else {
        return "Nama Perusahaan Kosong";
    }
});