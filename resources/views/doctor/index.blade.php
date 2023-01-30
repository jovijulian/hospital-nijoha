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
                                    <h3 class="mb-0">Doctors</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('doctor.create')}}" class="btn btn-sm btn-primary">Add Doctor</a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="text-center">No</th>
                                        <th scope="col">Registration Code</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Poly Name</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctors as $doctor)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td> <a href="{{ route('doctor.show', $doctor->id) }}" title="Lihat Data Dokter">{{ $doctor->registration_code }}</a></td>
                                            <td>{{ $doctor->name }}</td>
                                            <td> <a href="{{ route('doctor.show', $doctor->id) }}" title="Lihat Data Poli">{{ $doctor->polyclinic->name }}</a></td>
                                            <td>
                                                <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-primary">Edit</a> <form action="{{ route('doctor.destroy', $doctor->id) }}" method="POST">
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
