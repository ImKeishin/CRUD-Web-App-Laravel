<h1>Medici</h1>

<a href="{{ route('medici.create') }}">Adaugă medic</a>

<table border="1" cellpadding="5">
    <tr>
        <th>Nume</th>
        <th>Prenume</th>
        <th>Specializare</th>
        <th>Acțiuni</th>
    </tr>

    @foreach($medici as $medic)
        <tr>
            <td>{{ $medic->NumeMedic }}</td>
            <td>{{ $medic->PrenumeMedic }}</td>
            <td>{{ $medic->Specializare }}</td>
            <td>
                <a href="{{ route('medici.edit', $medic) }}">Edit</a>
                <form method="POST" action="{{ route('medici.destroy', $medic) }}" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Șterge</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
