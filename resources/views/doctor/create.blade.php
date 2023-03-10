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
                                <h3 class="mb-0">Add Doctors</h3>
                            </div>

                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('doctor.store') }}" method="POST">
                            @csrf
                                <div class="form-group mt-2">
                                    <label for="name" style="font-weight: bold; color: #000">Doctor Name</label>
                                    <input type="text" class="form-control" name="name">
                                    <label for="polyclinic_id" style="font-weight: bold; color: #000">Polyclinic Name</label>
                                    <select name="polyclinic_id" id="" class="form-control">
                                        <option value="" selected>Pilih Poli</option>
                                        @foreach ($polyclinics as $polyclinic)
                                            <option value="{{ $polyclinic->id }}">{{ $polyclinic->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="float-right">
                                    <a href="{{ route('doctor.index') }}" class="btn btn-danger">Back</a>
                                    <button type="submit" class="btn"  style="background: #E5E0FF; color: #000">Save</button>
                                </div>
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
