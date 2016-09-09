<table>
    <thead>
    <tr>
        <td></td>
        <td></td>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $key => $value)
        <tr>
            <td style="background-color: #ddd; padding: 5px;"><strong>{{ ucfirst(str_replace('_', ' ', $key)) }}</strong></td>
            <td>{{ $value }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
