<h1>Adaugă Programare</h1>

<form method="POST" action="{{ route('programari.store') }}">
    @csrf

    <label>Medic:</label>
    <select name="MedicID">
        @foreach($medici as $medic)
            <option value="{{ $medic->MedicID }}">
                {{ $medic->NumeMedic }} {{ $medic->PrenumeMedic }}
            </option>
        @endforeach
    </select>
    <br>

    <label>Pacient:</label>
    <select name="PacientID">
        @foreach($pacienti as $pacient)
            <option value="{{ $pacient->PacientID }}">
                {{ $pacient->NumePacient }} {{ $pacient->PrenumePacient }}
            </option>
        @endforeach
    </select>
    <br>

    <label>Data:</label>
    <input type="date" name="Data">
    <br>

    <button type="submit">Salvează</button>
</form>
