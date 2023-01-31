@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Polyclinics</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('patient.create')}}" class="btn btn-md" style="background: #FBF2CF; color: #000; border-radius: 15px;
                                ">Add Polyclinic</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <table class="table align-items-centertable-striped" style="margin: 0 auto; width: 95%">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col">Name</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($polyclinics as $polyclinic)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td> <a href="{{ route('polyclinic.show', $polyclinic->id) }}" title="Poly Detail" style="font-weight: bold">{{ $polyclinic->name }}</a></td>
                                <td class="text-center">
                                    <a href="{{ route('polyclinic.edit', $polyclinic->id) }}" class="btn" style="background: #61876E">Edit</a> <form action="{{ route('polyclinic.destroy', $polyclinic->id) }}" method="POST">
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
