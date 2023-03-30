@extends('layouts.app')

@section('content')
    <h1>Job Openings</h1>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Employer</th>
                <th>Location</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $job)
                <tr>
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->employer->name }}</td>
                    <td>{{ $job->location }}</td>
                    <td>{{ $job->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection