<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PageModel;

class Sitemap extends Controller
{
    public function index()
    {
        // Load model untuk mendapatkan data halaman (URL)
        $pageModel = new PageModel();

        // Ambil daftar halaman dari database
        $pages = $pageModel->getAllPages();

        // Buat response header sebagai XML
        header("Content-Type: application/xml; charset=UTF-8");

        // Muat view sitemap
        echo view('sitemap', ['pages' => $pages]);
    }
}
