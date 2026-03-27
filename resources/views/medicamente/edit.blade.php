<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<h1>Editează Medicament</h1>

<div style="display:flex; justify-content:center;">
    <div class="dashboard-card" style="width:360px;">

        <form method="POST" action="{{ route('medicamente.update', $medicament) }}">
            @csrf
            @method('PUT')

            <label>Denumire medicament</label><br>
            <input type="text"
                   name="Denumire"
                   value="{{ $medicament->Denumire }}"
                   style="width:100%; margin-bottom:15px;">

            <div class="actions">
                <button class="edit-btn" type="submit">Actualizează</button>
                <a class="delete-btn" href="{{ route('home') }}">Anulează</a>
            </div>

        </form>

    </div>
</div>
