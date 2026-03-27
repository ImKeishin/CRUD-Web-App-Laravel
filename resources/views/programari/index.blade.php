<h1>Programări</h1>

<a href="{{ route('programari.create') }}">Adaugă programare</a>

<table border="1" cellpadding="5">
    <tr>
        <th>Medic</th>
        <th>Pacient</th>
        <th>Data</th>
        <th>Acțiuni</th>
    </tr>

    @foreach($programari as $p)
        <tr>
            <td>{{ $p->medic->NumeMedic }} {{ $p->medic->PrenumeMedic }}</td>
            <td>{{ $p->pacient->NumePacient }} {{ $p->pacient->PrenumePacient }}</td>
            <td>{{ $p->Data }}</td>
            <td>
                <a href="{{ route('programari.edit', $p) }}">Edit</a>

                <form method="POST"
                      action="{{ route('programari.destroy', $p) }}"
                      style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Șterge</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
