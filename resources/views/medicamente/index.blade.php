<h1>Medicamente</h1>

<a href="{{ route('medicamente.create') }}">Adaugă medicament</a>

<table border="1" cellpadding="5">
    <tr>
        <th>Denumire</th>
        <th>Acțiuni</th>
    </tr>

    @foreach($medicamente as $medicament)
        <tr>
            <td>{{ $medicament->Denumire }}</td>
            <td>
                <a href="{{ route('medicamente.edit', $medicament) }}">Edit</a>

                <form method="POST"
                      action="{{ route('medicamente.destroy', $medicament) }}"
                      style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Șterge</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
