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
                                <h3 class="mb-0">Doctor Detail</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table>
                            <tr>
                                <td>Registration Code</td>
                                <td>: {{ $detail->registration_code }}</td>
                            </tr>
                            <tr>
                                <td>Doctor Name</td>
                                <td>: {{ $detail->name }}</td>
                            </tr>
                            <tr>
                                <td>Polyclinic Name</td>
                                <td>: {{ $detail->polyclinic->name }}</td>
                            </tr>
                            <tr>
                                <td>Created</td>
                                <td>: {{  date('d-m-Y H:i:s', strtotime($detail->created_at)) }}</td>
                            </tr>

                        </table>
                        <hr>
                        <table class="table align-items-center table-striped" style="margin: 0 auto; width: 95%"">
                            <h5 class="text-center">Patient</h5>
                            <thead class="thead-light">
                                <tr>
                                        <th scope="col" class="text-center">No</th>
                                        <th scope="col">Registration Code</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Age</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($detail->patient as $patient)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td><a href="{{ route('patient.show', $patient->id) }}" title="Detail patient" style="font-weight: bold; color: #7286D3">{{ $patient->registration_code }}</a></td>
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
