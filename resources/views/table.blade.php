<table class="{{ $class }}">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Acción</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($model->historys->reverse() as $item)
            <tr>
                <td scope="row">{{ $item->authorName }}</td>
                <td>{{ $item->body }}</td>
                <td>{{ $item->created }}</td>
            </tr>            
        @endforeach
    </tbody>
</table>