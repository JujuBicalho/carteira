<?php

namespace App\Controller;
use App\Controller\Controller;

class SiteController extends Controller {
    public function home() {
        return require __DIR__ . "/../../site/home.php";
    }
}