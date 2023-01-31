@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h3 class="mb-0">Polyclinic Detail</h3>
                            </div>
                        </div>
                    </div>

                  <div class="card-body">
                    <h6 class="mb-1 ml-2">Id: {{ $polyclinic->id }}</h6>
                    <h6 class="mb-1 ml-2">Name: {{ $polyclinic->name }}</h6>
                    <h6 class="ml-2">Created: {{ date('d-m-Y H:i:s', strtotime($polyclinic->created_at)) }}</h6>

                        <table class="table align-items-center table-striped" style="margin: 0 auto; width: 95%"">
                            <h5 class="text-center">Doctor</h5>
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col">Registration Code</th>
                                    <th scope="col">Name</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($polyclinic->doctor as $doctor)
                            <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td> <a href="{{ route('doctor.show', $doctor->id) }}" title="Lihat Data Dokter" style="font-weight: bold">{{ $doctor->registration_code }}</a></td>
                                    <td>{{ $doctor->name }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <table class="table align-items-center table-striped" style="margin: 0 auto; width: 95%"">
                            <h5 class="text-center">Patient</h5>
                            <thead class="thead-dark">
                                <tr>
                                        <th scope="col" class="text-center">No</th>
                                        <th scope="col">Registration Code</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Age</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($polyclinic->patient as $patient)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td><a href="{{ route('patient.show', $patient->id) }}" title="Detail patient" style="font-weight: bold">{{ $patient->registration_code }}</a></td>
                                <td>{{ $patient->name }}</td>
                                <td>{{ Carbon\Carbon::parse($patient->birthDate)->age . " y.o" }}</td>
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
