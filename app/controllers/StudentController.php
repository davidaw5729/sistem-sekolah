<?php

namespace App\Controllers;
class StudentController
{

    public function index()
    {
        echo '<h1>Daftar Siswa</h1>';
        echo '<p>Menampilkan Daftar Siswa</p>';

    }
    public function create()
    {
        require_once '../app/views/students/index.php';
    }

    public function show(string $id)
    {
        require_once '../app/views/students/show.php';
    }
}
?>