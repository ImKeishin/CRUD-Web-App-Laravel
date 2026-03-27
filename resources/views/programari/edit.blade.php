<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<h1>Editează Programare</h1>

<div style="display:flex; justify-content:center;">
    <div class="dashboard-card" style="width:460px;">

        <form method="POST" action="{{ route('programari.update', $programare) }}">
            @csrf
            @method('PUT')

            <label>Medic</label><br>
            <select name="MedicID" style="width:100%; margin-bottom:10px;">
                @foreach($medici as $medic)
                    <option value="{{ $medic->MedicID }}"
                        {{ $programare->MedicID == $medic->MedicID ? 'selected' : '' }}>
                        {{ $medic->NumeMedic }} {{ $medic->PrenumeMedic }}
                    </option>
                @endforeach
            </select>

            <label>Pacient</label><br>
            <select name="PacientID" style="width:100%; margin-bottom:10px;">
                @foreach($pacienti as $pacient)
                    <option value="{{ $pacient->PacientID }}"
                        {{ $programare->PacientID == $pacient->PacientID ? 'selected' : '' }}>
                        {{ $pacient->NumePacient }} {{ $pacient->PrenumePacient }}
                    </option>
                @endforeach
            </select>

            <label>Data programării</label><br>
            <input type="date"
                   name="Data"
                   value="{{ $programare->Data }}"
                   style="width:100%; margin-bottom:15px;">

            <div class="actions">
                <button class="edit-btn" type="submit">Actualizează</button>
                <a class="delete-btn" href="{{ route('home') }}">Anulează</a>
            </div>

        </form>

    </div>
</div>
