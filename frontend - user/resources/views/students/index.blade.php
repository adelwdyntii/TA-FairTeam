<tr>
    <td>{{ $no++ }}</td>
    <td>
        <a class="btn btn-sm btn-outline-secondary" href="{{route('students.show', $student->id)}}">
            Show
        </a>
        <a class="btn btn-sm btn-success" href="{{route('students.edit', $student->id)}}">
            Edit
        </a>
    </td>
    <td> {{ $student->user->name }}</td>
    <td> {{ $student->user->username }}</td>
    <td>
        <a class="btn btn-sm btn-outline-secondary" href="{{ route('student-classes.show', $student->student_class_id)}}">
        {{ $student->studentClass->name }}</a>
    </td>
</tr>