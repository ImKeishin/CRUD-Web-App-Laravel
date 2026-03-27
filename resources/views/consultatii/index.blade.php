<h1>Consultații</h1>

<a href="{{ route('consultatii.create') }}">Adaugă consultație</a>

<table border="1" cellpadding="5">
<tr>
    <th>Pacient</th>
    <th>Medicament</th>
    <th>Diagnostic</th>
    <th>Doză</th>
    <th>Acțiuni</th>
</tr>

@foreach($consultatii as $c)
<tr>
    <td>{{ $c->pacient->NumePacient }} {{ $c->pacient->PrenumePacient }}</td>
    <td>{{ $c->medicament->Denumire }}</td>
    <td>{{ $c->Diagnostic }}</td>
    <td>{{ $c->DozaMedicament }}</td>
    <td>
        <a href="{{ route('consultatii.edit', $c) }}">Edit</a>
        <form method="POST"
              action="{{ route('consultatii.destroy', $c) }}"
              style="display:inline">
            @csrf
            @method('DELETE')
            <button>Șterge</button>
        </form>
    </td>
</tr>
@endforeach
</table>
