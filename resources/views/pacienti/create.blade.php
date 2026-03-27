<h1>Adaugă Pacient</h1>

<form method="POST" action="{{ route('pacienti.store') }}">
    @csrf

    <input name="NumePacient" placeholder="Nume"><br>
    <input name="PrenumePacient" placeholder="Prenume"><br>
    <input name="Adresa" placeholder="Adresa"><br>

    <label>
        Asigurare:
        <select name="Asigurare">
            <option value="1">DA</option>
            <option value="0">NU</option>
        </select>
    </label>
    <br>

    <button type="submit">Salvează</button>
</form>
