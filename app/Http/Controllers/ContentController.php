<?php

namespace App\Http\Controllers;

use App\Models\Employee; // Importuj model
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function getContent($type)
    {
        switch ($type) {
            case 'dashboard':
                return view('partials.dashboard');
            case 'documents':
                return view('partials.documents');
            case 'settings':
                return view('partials.settings');
            case 'add-employee':
                return view('partials.add-employee'); // W widokach
            case 'search-employee':
                return view('partials.search-employee'); // W widokach
            default:
                return response()->json(['error' => 'Invalid type'], 404);
        }
    }

    public function store(Request $request)
    {
        // Walidacja danych
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255', // Nowe pole
            'position' => 'required|string|max:255',
            'contract_type' => 'required|string',
            'max_hours' => 'required|integer',
            'hire_date' => 'required|date',
            'salary' => 'required|numeric',
            'email' => 'required|email|unique:employees,email',
            'pesel' => 'required|string|unique:employees,pesel', // Nowe pole
            'city' => 'required|string|max:255', // Nowe pole
            'street' => 'required|string|max:255', // Nowe pole
            'house_number' => 'required|string|max:50', // Nowe pole
            'building_number' => 'nullable|string|max:50', // Nowe pole
            'postal_code' => 'required|string|max:10', // Nowe pole
        ]);

        // Tworzenie nowego pracownika
        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->surname = $request->input('surname'); // Nowe pole
        $employee->position = $request->input('position');
        $employee->contract_type = $request->input('contract_type');
        $employee->max_hours = $request->input('max_hours');
        $employee->hire_date = $request->input('hire_date');
        $employee->salary = $request->input('salary');
        $employee->email = $request->input('email');
        $employee->pesel = $request->input('pesel'); // Nowe pole
        $employee->city = $request->input('city'); // Nowe pole
        $employee->street = $request->input('street'); // Nowe pole
        $employee->house_number = $request->input('house_number'); // Nowe pole
        $employee->building_number = $request->input('building_number'); // Nowe pole
        $employee->postal_code = $request->input('postal_code'); // Nowe pole
        $employee->save();

        return response()->json(['success' => 'Pracownik został dodany!']);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Wyszukiwanie pracowników po nazwisku lub stanowisku
        $employees = Employee::where('name', 'LIKE', "%{$query}%")
            ->orWhere('surname', 'LIKE', "%{$query}%") // Dodano wyszukiwanie po nazwisku
            ->orWhere('position', 'LIKE', "%{$query}%")
            ->get();

        return response()->json($employees);
    }
}
