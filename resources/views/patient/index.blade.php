@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'dashboard'
])

@section('content')
    <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Patients</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('patient.create')}}" class="btn btn-md" style="background: #FBF2CF; color: #000; border-radius: 15px;
                                    ">Add Patients</a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <table class="table align-items-center table-striped" style="margin: 0 auto; width: 95%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Registration Number</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Doctor Name</th>
                                        <th scope="col">Poly Name</th>
                                        <th  class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patients as $patient)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td><a href="{{ route('patient.show', $patient->id) }}" title="Patient Detail" style="font-weight: bold">{{ $patient->registration_code }}</a></td>
                                            <td>{{ $patient->name }}</td>
                                            <td>{{ Carbon\Carbon::parse($patient->birthDate)->age . " y.o" }}</td>
                                            <td> <a href="{{ route('doctor.show', $patient->doctor->id) }}" title="Doctor Detail" style="font-weight: bold">{{ $patient->doctor->name }}</a></td>
                                            <td> <a href="{{ route('polyclinic.show', $patient->polyclinic->id) }}" title="Poly Detail" style="font-weight: bold">{{ $patient->polyclinic->name }}</a></td>
                                            <td class="text-center">
                                                <a href="{{ route('patient.edit', $patient->id) }}" class="btn" style="background: #61876E">Edit</a> <form action="{{ route('patient.destroy', $patient->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
@endpush
