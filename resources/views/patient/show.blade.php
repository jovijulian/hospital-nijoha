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
                                <h3 class="mb-0">Patient Detail</h3>
                            </div>
                        </div>
                    </div>

                  <div class="card-body">

                    <table>
                        <tr>
                            <td>Registration Number</td>
                            <td>: {{ $patient->registration_code }}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>: {{ $patient->name }}</td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td>: {{ Carbon\Carbon::parse($patient->birthDate)->age . " y.o" }}</td>
                        </tr>
                        <tr>
                            <td>Doctor</td>
                            <td>: {{ $patient->doctor->name }}</td>
                        </tr>
                        <tr>
                            <td>Polyclinic</td>
                            <td>: {{ $patient->polyclinic->name }}</td>
                        </tr>
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
