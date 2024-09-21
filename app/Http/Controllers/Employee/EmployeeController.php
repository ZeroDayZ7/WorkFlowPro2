<?php

namespace App\Http\Controllers\Employee;

use App\Models\Employee; // Importuj model pracownika
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'contract_type' => 'required|string|max:255',
            'max_hours' => 'required|integer',
            'hire_date' => 'required|date',
            'salary' => 'required|numeric',
            'email' => 'required|email|unique:employees,email',
            'pesel' => 'required|digits:11|unique:employees,pesel',
            'city' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'house_number' => 'required|string|max:10',
            'building_number' => 'nullable|string|max:10',
            'postal_code' => 'required|string|max:10',
        ], [
            'pesel.unique' => 'Pracownik z tym numerem PESEL już istnieje.',
            'email.unique' => 'Adres e-mail jest już zajęty.',
        ]);
    
        // Jeśli walidacja zakończy się powodzeniem, kontynuuj dodawanie
        Employee::create($validatedData);

        // Przekierowanie po dodaniu pracownika
        return redirect()->route('dashboard', ['page' => 'add-employee'])
                         ->with('success', 'Pracownik został dodany!');
    }
}
