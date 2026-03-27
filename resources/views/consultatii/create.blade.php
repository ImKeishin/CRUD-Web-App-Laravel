<h1>Adaugă Consultație</h1>

<form method="POST" action="{{ route('consultatii.store') }}">
    @csrf

    <label>Pacient:</label>
    <select name="PacientID">
        @foreach($pacienti as $pacient)
            <option value="{{ $pacient->PacientID }}">
                {{ $pacient->NumePacient }} {{ $pacient->PrenumePacient }}
            </option>
        @endforeach
    </select>
    <br>

    <label>Medicament:</label>
    <select name="MedicamentID">
        @foreach($medicamente as $medicament)
            <option value="{{ $medicament->MedicamentID }}">
                {{ $medicament->Denumire }}
            </option>
        @endforeach
    </select>
    <br>

    <label>Diagnostic:</label>
    <input name="Diagnostic">
    <br>

    <label>Doză:</label>
    <input name="DozaMedicament">
    <br>

    <button type="submit">Salvează</button>
</form>
