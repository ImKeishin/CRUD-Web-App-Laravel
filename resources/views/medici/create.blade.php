<h1>Adaugă Medic</h1>

<form method="POST" action="{{ route('medici.store') }}">
    @csrf

    <input name="NumeMedic" placeholder="Nume"><br>
    <input name="PrenumeMedic" placeholder="Prenume"><br>
    <input name="Specializare" placeholder="Specializare"><br>

    <button type="submit">Salvează</button>
</form>
