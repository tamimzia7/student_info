<table border="2">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date</th>
        <th>oparetion</th>
        
    </tr>

@foreach($students as $student)

<tr>
    <td>{{ $student->name }}</td>
    <td>{{ $student->email }}</td>
    <td>{{ $student->phone_number }}</td>
    <td>{{ $student->create_date }}</td>
    <td><a href="{{ 'delete/'.$student->id }}">delete</a>
        <a href="{{ 'edit/'.$student->id }}">edit</a>
    
    </td>
    


</tr>

@endforeach
</table>