<table border="2">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date</th>
    </tr>

@foreach($students as $student)

<tr>
    <td>{{ $student->name }}</td>
    <td>{{ $student->email }}</td>
    <td>{{ $student->phone_number }}</td>
    <td>{{ $student->create_date }}</td>
</tr>

@endforeach
</table>