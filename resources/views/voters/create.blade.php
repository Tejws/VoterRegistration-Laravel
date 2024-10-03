@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Register for Voter ID</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/register') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateAge()">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                        <div class="mb-3">
                            <label for="aadhar_card" class="form-label">Aadhar Card</label>
                            <input type="text" class="form-control" name="aadhar_card" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" class="form-control" name="photo" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function validateAge() {
        var dob = document.getElementById('dob').value;
        if (dob) {
            // Calculate the user's age
            var birthDate = new Date(dob);
            var today = new Date();
            var age = today.getFullYear() - birthDate.getFullYear();
            var month = today.getMonth() - birthDate.getMonth();
            if (month < 0 || (month === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            // Check if age is less than 18
            if (age < 18) {
                alert("You must be at least 18 years old to register.");
                return false; // Prevent form submission
            }
        }
        return true;
    }
</script>
@endsection
