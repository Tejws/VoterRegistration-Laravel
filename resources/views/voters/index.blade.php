@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h4>Registered Voters</h4>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Aadhar Card</th>
                        <th>Phone</th>
                        <th>Photo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($voters as $voter)
                        <tr>
                            <td>{{ $voter->name }}</td>
                            <td>{{ $voter->email }}</td>
                            <td>{{ $voter->dob }}</td>
                            <td>{{ $voter->aadhar_card }}</td>
                            <td>{{ $voter->phone }}</td>
                            <td><img src="{{ asset('storage/' . $voter->photo) }}" width="50" height="50">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
