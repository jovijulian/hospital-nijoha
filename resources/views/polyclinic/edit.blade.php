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
                                <h3 class="mb-0">Edit Polyclinics</h3>
                            </div>
                           
                        </div>
                    </div>
        
                    <div class="card-body">
                        <form action="{{ route('polyclinic.update', $polyclinic->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="form-group mt-2">
                                <label for="name">Polyclinic Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $polyclinic->name }}">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        </form>
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
