<h1>Pacienți</h1>

<a href="{{ route('pacienti.create') }}">Adaugă pacient</a>

<table border="1" cellpadding="5">
    <tr>
        <th>Nume</th>
        <th>Prenume</th>
        <th>Adresa</th>
        <th>Asigurare</th>
        <th>Acțiuni</th>
    </tr>

    @foreach($pacienti as $pacient)
        <tr>
            <td>{{ $pacient->NumePacient }}</td>
            <td>{{ $pacient->PrenumePacient }}</td>
            <td>{{ $pacient->Adresa }}</td>
            <td>{{ $pacient->Asigurare ? 'DA' : 'NU' }}</td>
            <td>
                <a href="{{ route('pacienti.edit', $pacient) }}">Edit</a>

                <form method="POST"
                      action="{{ route('pacienti.destroy', $pacient) }}"
                      style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Șterge</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
