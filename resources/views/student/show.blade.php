@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Detail Student</div>

                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Name</th>
                                <td>: {{ $student->name }}</td>
                            </tr>

                            <tr>
                                <th>Gender</th>
                                <td>: {{ $student->gender }}</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>: {{ $student->address }}</td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <td>: {{ $student->email }}</td>
                            </tr>

                            <tr>
                                <th>Created Date</th>
                                <td>: {{ $student->created_at->format('d/m/Y') }}</td>
                            </tr>

                            <tr>
                                <th>Created Time</th>
                                <td>: {{ $student->created_at->format('H:i:s') }}</td>
                            </tr>
                        </table>

                        <div class="justify-content-end d-flex">
                            <a href="{{ url('student') }}" class="btn btn-secondary btn-sm">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
