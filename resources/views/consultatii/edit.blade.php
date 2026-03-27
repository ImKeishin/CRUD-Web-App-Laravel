<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<h1>Editează Consultație</h1>

<div style="display:flex; justify-content:center;">
    <div class="dashboard-card" style="width:420px;">

        <form method="POST" action="{{ route('consultatii.update', $consultatie) }}">
            @csrf
            @method('PUT')

            <label>Pacient</label><br>
            <select name="PacientID" style="width:100%; margin-bottom:10px;">
                @foreach($pacienti as $pacient)
                    <option value="{{ $pacient->PacientID }}"
                        {{ $consultatie->PacientID == $pacient->PacientID ? 'selected' : '' }}>
                        {{ $pacient->NumePacient }} {{ $pacient->PrenumePacient }}
                    </option>
                @endforeach
            </select>

            <label>Medicament</label><br>
            <select name="MedicamentID" style="width:100%; margin-bottom:10px;">
                @foreach($medicamente as $medicament)
                    <option value="{{ $medicament->MedicamentID }}"
                        {{ $consultatie->MedicamentID == $medicament->MedicamentID ? 'selected' : '' }}>
                        {{ $medicament->Denumire }}
                    </option>
                @endforeach
            </select>

            <label>Diagnostic</label><br>
            <input type="text"
                   name="Diagnostic"
                   value="{{ $consultatie->Diagnostic }}"
                   style="width:100%; margin-bottom:10px;">

            <label>Doză medicament</label><br>
            <input type="text"
                   name="DozaMedicament"
                   value="{{ $consultatie->DozaMedicament }}"
                   style="width:100%; margin-bottom:15px;">

            <div class="actions">
                <button class="edit-btn" type="submit">Actualizează</button>
                <a class="delete-btn" href="{{ route('home') }}">Anulează</a>
            </div>

        </form>

    </div>
</div>
