<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->query('page', null); // Sprawdź, czy parametr 'page' jest obecny
        
        if ($page === 'search-employee' && !View::exists("dashboard.$page")) {
            return "Widok nie istnieje"; // To pomoże Ci zdiagnozować problem
        }
        

        // Jeśli parametr 'page' nie jest ustawiony, przekieruj na 'page=main'
        if (is_null($page)) {
            return redirect('/dashboard?page=main');
        }

        // Sprawdź, czy widok istnieje
        if (View::exists("dashboard.$page")) {
            return view("dashboard.dashboard", ['page' => $page]);
        }

        // Jeśli widok nie istnieje, załaduj domyślny
        return view("dashboard.dashboard", ['page' => 'main']);
    }
}
