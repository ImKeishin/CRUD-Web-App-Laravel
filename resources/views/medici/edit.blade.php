<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<h1>Editează Medic</h1>

<div style="display:flex; justify-content:center;">
    <div class="dashboard-card" style="width:420px;">

        <form method="POST" action="{{ route('medici.update', $medic) }}">
            @csrf
            @method('PUT')

            <label>Nume</label><br>
            <input type="text"
                   name="NumeMedic"
                   value="{{ $medic->NumeMedic }}"
                   style="width:100%; margin-bottom:10px;">

            <label>Prenume</label><br>
            <input type="text"
                   name="PrenumeMedic"
                   value="{{ $medic->PrenumeMedic }}"
                   style="width:100%; margin-bottom:10px;">

            <label>Specializare</label><br>
            <input type="text"
                   name="Specializare"
                   value="{{ $medic->Specializare }}"
                   style="width:100%; margin-bottom:15px;">

            <div class="actions">
                <button class="edit-btn" type="submit">Actualizează</button>
                <a class="delete-btn" href="{{ route('home') }}">Anulează</a>
            </div>

        </form>

    </div>
</div>
