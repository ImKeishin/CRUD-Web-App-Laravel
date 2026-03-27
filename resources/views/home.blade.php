<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<h1>Dashboard Clinică</h1>

<div class="dashboard-grid">

    {{-- MEDICI --}}
    <div class="dashboard-card">
        <h2>Medici</h2>
        <a href="{{ route('medici.create') }}">Adaugă medic</a>

        <table>
            <tr>
                <th>Nume</th>
                <th>Prenume</th>
                <th>Spec.</th>
                <th>Act.</th>
            </tr>
            @foreach($medici as $m)
            <tr>
                <td>{{ $m->NumeMedic }}</td>
                <td>{{ $m->PrenumeMedic }}</td>
                <td>{{ $m->Specializare }}</td>
                <td>
                    <div class="actions">
                        <a class="edit-btn" href="{{ route('medici.edit', $m) }}">Edit</a>
                        <form method="POST" action="{{ route('medici.destroy', $m) }}">
                            @csrf
                            @method('DELETE')
                            <button class="delete-btn">Del</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    {{-- PACIENȚI --}}
    <div class="dashboard-card">
        <h2>Pacienți</h2>
        <a href="{{ route('pacienti.create') }}">Adaugă pacient</a>

        <table>
            <tr>
                <th>Nume</th>
                <th>Adresă</th>
                <th>Asig.</th>
                <th>Act.</th>
            </tr>
            @foreach($pacienti as $p)
            <tr>
                <td>{{ $p->NumePacient }}</td>
                <td>{{ $p->Adresa }}</td>
                <td>{{ $p->Asigurare ? 'DA' : 'NU' }}</td>
                <td>
                    <div class="actions">
                        <a class="edit-btn" href="{{ route('pacienti.edit', $p) }}">Edit</a>
                        <form method="POST" action="{{ route('pacienti.destroy', $p) }}">
                            @csrf
                            @method('DELETE')
                            <button class="delete-btn">Del</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    {{-- MEDICAMENTE --}}
    <div class="dashboard-card">
        <h2>Medicamente</h2>
        <a href="{{ route('medicamente.create') }}">Adaugă medicament</a>

        <table>
            <tr>
                <th>Denumire</th>
                <th>Act.</th>
            </tr>
            @foreach($medicamente as $med)
            <tr>
                <td>{{ $med->Denumire }}</td>
                <td>
                    <div class="actions">
                        <a class="edit-btn" href="{{ route('medicamente.edit', $med) }}">Edit</a>
                        <form method="POST" action="{{ route('medicamente.destroy', $med) }}">
                            @csrf
                            @method('DELETE')
                            <button class="delete-btn">Del</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    {{-- PROGRAMĂRI --}}
    <div class="dashboard-card">
        <h2>Programări</h2>
        <a href="{{ route('programari.create') }}">Adaugă programare</a>

        <table>
            <tr>
                <th>Medic</th>
                <th>Pacient</th>
                <th>Data</th>
                <th>Act.</th>
            </tr>
            @foreach($programari as $p)
            <tr>
                <td>{{ $p->medic->NumeMedic }}</td>
                <td>{{ $p->pacient->NumePacient }}</td>
                <td>{{ $p->Data }}</td>
                <td>
                    <div class="actions">
                        <a class="edit-btn" href="{{ route('programari.edit', $p) }}">Edit</a>
                        <form method="POST" action="{{ route('programari.destroy', $p) }}">
                            @csrf
                            @method('DELETE')
                            <button class="delete-btn">Del</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    {{-- CONSULTAȚII --}}
    <div class="dashboard-card">
        <h2>Consultații</h2>
        <a href="{{ route('consultatii.create') }}">Adaugă consultație</a>

        <table>
            <tr>
                <th>Pacient</th>
                <th>Medicament</th>
                <th>Diagnostic</th>
                <th>Doză</th>
                <th>Act.</th>
            </tr>
            @foreach($consultatii as $c)
            <tr>
                <td>{{ $c->pacient->NumePacient }}</td>
                <td>{{ $c->medicament->Denumire }}</td>
                <td>{{ $c->Diagnostic }}</td>
                <td>{{ $c->DozaMedicament }}</td>
                <td>
                    <div class="actions">
                        <a class="edit-btn" href="{{ route('consultatii.edit', $c) }}">Edit</a>
                        <form method="POST" action="{{ route('consultatii.destroy', $c) }}">
                            @csrf
                            @method('DELETE')
                            <button class="delete-btn">Del</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

</div>
