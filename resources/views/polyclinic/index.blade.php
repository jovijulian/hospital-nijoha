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
                                <a href="{{ route('polyclinic.create')}}" class="btn btn-sm btn-primary">Add polyclinic</a>
                            </div>
                        </div>
                    </div>
        
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th colspan="2">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($polyclinics as $polyclinic)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> <a href="{{ route('polyclinic.show', $polyclinic->id) }}" title="Lihat Data Polyclinic">{{ $polyclinic->name }}</a></td>
                                <td>
                                    <a href="{{ route('polyclinic.edit', $polyclinic->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('polyclinic.destroy', $polyclinic->id) }}" method="POST">
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
