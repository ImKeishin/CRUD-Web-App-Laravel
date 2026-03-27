<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<h1>Editează Pacient</h1>

<div style="display:flex; justify-content:center;">
    <div class="dashboard-card" style="width:460px;">

        <form method="POST" action="{{ route('pacienti.update', $pacient) }}">
            @csrf
            @method('PUT')

            <label>Nume</label><br>
            <input type="text"
                   name="NumePacient"
                   value="{{ $pacient->NumePacient }}"
                   style="width:100%; margin-bottom:10px;">

            <label>Prenume</label><br>
            <input type="text"
                   name="PrenumePacient"
                   value="{{ $pacient->PrenumePacient }}"
                   style="width:100%; margin-bottom:10px;">

            <label>Adresă</label><br>
            <input type="text"
                   name="Adresa"
                   value="{{ $pacient->Adresa }}"
                   style="width:100%; margin-bottom:10px;">

            <label>Asigurare</label><br>
            <select name="Asigurare" style="width:100%; margin-bottom:15px;">
                <option value="1" {{ $pacient->Asigurare ? 'selected' : '' }}>DA</option>
                <option value="0" {{ !$pacient->Asigurare ? 'selected' : '' }}>NU</option>
            </select>

            <div class="actions">
                <button class="edit-btn" type="submit">Actualizează</button>
                <a class="delete-btn" href="{{ route('home') }}">Anulează</a>
            </div>

        </form>

    </div>
</div>
