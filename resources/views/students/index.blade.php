@extends('layout_frontend.app')

@section('content')
<div class="container">
    <h1>Student Management</h1>

    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Class</th>
                <th>Class Teacher</th>
                <th>Admission Date</th>
                <th>Yearly Fees</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->student_name }}</td>
                <td>{{ $student->class }}</td>
                <td>{{ $student->teacher->teacher_name }}</td>
                <td>{{ $student->admission_date }}</td>
                <td>{{ $student->yearly_fees }}</td>
                <td>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-between align-items-center mt-4">
        <div>
            <p>Showing {{ $students->firstItem() }} to {{ $students->lastItem() }} of {{ $students->total() }} students</p>
        </div>
        <div>
            {{ $students->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
