<h1>Adaugă Medicament</h1>

<form method="POST" action="{{ route('medicamente.store') }}">
    @csrf

    <input name="Denumire" placeholder="Denumire medicament"><br>

    <button type="submit">Salvează</button>
</form>
