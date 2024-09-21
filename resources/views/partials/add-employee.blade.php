<div class="add-employee-div-main">
    <h2>Dodaj Pracownika</h2>
    <form id="addEmployeeForm">
        @csrf
        <input type="email" name="email" required placeholder="Email" value="a@a.pl">
        <input type="text" name="name" placeholder="Imię" required value="Mirosław">
        <input type="text" name="surname" placeholder="Nazwisko" required value="Kowalski"> <!-- Dodano pole nazwisko -->
        <input type="text" name="position" placeholder="Stanowisko" required value="Kierownik">
        <select name="contract_type" required>
            <option value="umowa o pracę">Umowa o pracę</option>
            <option value="umowa zlecenie">Umowa zlecenie</option>
            <option value="umowa o dzieło">Umowa o dzieło</option>
        </select>
        <input type="number" name="max_hours" placeholder="Maksymalne godziny pracy" required value="168">
        <input type="date" name="hire_date" required value="2024-09-20"> <!-- Przykładowa data -->
        <input type="number" name="salary" placeholder="Wynagrodzenie" step="0.01" required value="2000">
        <input type="text" name="pesel" placeholder="PESEL" required value="12345678901"> <!-- Przykładowy PESEL -->
        <input type="text" name="city" placeholder="Miejscowość" required value="Warszawa"> <!-- Przykładowa miejscowość -->
        <input type="text" name="street" placeholder="Ulica" required value="Kwiatowa"> <!-- Przykładowa ulica -->
        <input type="text" name="house_number" placeholder="Numer domu" required value="5"> <!-- Przykładowy numer domu -->
        <input type="text" name="building_number" placeholder="Numer budynku" value="B"> <!-- Przykładowy numer budynku -->
        <input type="text" name="postal_code" placeholder="Kod pocztowy" required value="00-001"> <!-- Przykładowy kod pocztowy -->
        <button type="submit">Dodaj Pracownika</button>
    </form>
    <div id="addEmployeeMessage"></div>
</div>

<style>
    .add-employee-div-main {
        width: 500px;
    }
</style>
