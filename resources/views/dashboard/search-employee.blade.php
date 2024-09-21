<div class="add-employee-div-main">
    @include('alerts')
    <h2>Dodaj Pracownika</h2>
    <form id="addEmployeeForm" action="{{ route('employee.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group">
                
                <label for="name">Imię</label>
                <input type="text" id="name" name="name" placeholder="Imię" required value="Mirosław">
            </div>
            
            <div class="form-group">
                <label for="surname">Nazwisko</label>
                <input type="text" id="surname" name="surname" placeholder="Nazwisko" required value="Kowalski">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Email" value="a@a.pl">
                
            </div>
            
            <div class="form-group">
                <label for="position">Stanowisko</label>
                <input type="text" id="position" name="position" placeholder="Stanowisko" required value="Kierownik">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="contract_type">Rodzaj umowy</label>
                <select id="contract_type" name="contract_type" required>
                    <option value="umowa o pracę">Umowa o pracę</option>
                    <option value="umowa zlecenie">Umowa zlecenie</option>
                    <option value="umowa o dzieło">Umowa o dzieło</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="max_hours">Maksymalne godziny pracy</label>
                <input type="number" id="max_hours" name="max_hours" placeholder="Maksymalne godziny pracy" required value="168">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="hire_date">Data zatrudnienia</label>
                <input type="date" id="hire_date" name="hire_date" required value="2024-09-20">
            </div>
            
            <div class="form-group">
                <label for="salary">Wynagrodzenie</label>
                <input type="number" id="salary" name="salary" placeholder="Wynagrodzenie" step="0.01" required value="2000">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="pesel">PESEL</label>
                <input type="text" id="pesel" name="pesel" placeholder="PESEL" required value="12345678901">
            </div>
            
            <div class="form-group">
                <label for="city">Miejscowość</label>
                <input type="text" id="city" name="city" placeholder="Miejscowość" required value="Warszawa">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="street">Ulica</label>
                <input type="text" id="street" name="street" placeholder="Ulica" required value="Kwiatowa">
            </div>
            
            <div class="form-group">
                <label for="house_number">Numer domu</label>
                <input type="text" id="house_number" name="house_number" placeholder="Numer domu" required value="5">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="building_number">Numer budynku</label>
                <input type="text" id="building_number" name="building_number" placeholder="Numer budynku" value="B">
            </div>
            
            <div class="form-group">
                <label for="postal_code">Kod pocztowy</label>
                <input type="text" id="postal_code" name="postal_code" placeholder="Kod pocztowy" required value="00-001">
            </div>
        </div>

        <div class="form-group form-submit">
            <button type="submit">Dodaj Pracownika</button>
        </div>
    </form>
</div>

<style>
    .add-employee-div-main {
        width: 700px;
        margin: 0 auto;
        padding: 20px;
    }

    .form-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .form-group {
        flex: 1;
        display: flex;
        flex-direction: column;
        margin-right: 10px;
    }

    .form-group:last-child {
        margin-right: 0;
    }
    
    .form-group label {
        margin-bottom: 5px;
        font-weight: bold;
    }
    
    .form-group input,
    .form-group select {
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    /* Przyciski */
    button[type="submit"] {
        padding: 10px 20px;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
        margin-top: 10px;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    .form-submit {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
</style>
