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
                                <h3 class="mb-0">Add Patient</h3>
                            </div>

                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('patient.store') }}" method="POST">
                            @csrf
                                <div class="form-group mt-2">
                                    <label for="name" style="font-weight: bold; color: #000">Patient Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="birth_date" style="font-weight: bold; color: #000">Birth Date</label>
                                    <input type="date" class="form-control" name="birthDate">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="gender" style="font-weight: bold; color: #000">Gender</label>
                                    <input type="radio" class="form-control-inline" name="gender" value="M"> Men
                                    <input type="radio" class="form-control-inline" name="gender" value="W"> Women
                                </div>
                                <div class="form-group mt-2">
                                    <label for="polyclinic_id" style="font-weight: bold; color: #000">Polyclinic Name</label>
                                    <select id="polyclinic_id" name="polyclinic_id" class="form-control selectpicker" data-live-search="true" style="font-weight: bold" required>
                                        <option selected>Choose Poly</option>
                                        @foreach ($polyclinics as $polyclinic)
                                            <option value="{{ $polyclinic->id }}">{{ $polyclinic->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="doctor_id" style="font-weight: bold; color: #000">Doctor Name</label>
                                    <select id="doctor_id" name="doctor_id" class="form-control selectpicker" data-live-search="true" style="font-weight: bold" required>
                                        <option selected>Choose Doctor</option>
                                    </select>
                                </div>
                                <div class="float-right">
                                    <button type="submit" class="btn mt-3" style="background: #61876E">Save</button>
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
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script>
    $(document).ready(function () {
        $('#polyclinic_id').selectpicker();
        $('#polyclinic_id').on('change', function () {
            var idPolyclinic = this.value;
            $("#doctor_id").html('');
            $.ajax({
                url: `{{url('api/doctor')}}`,
                type: "POST",
                data: {
                    polyclinic_id: idPolyclinic,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $("#doctor_id").append('<option value="">' + "Choose Doctor" + '</option>');
                    $.each(result, function (key, value) {
                        $("#doctor_id").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                            $('#doctor_id').selectpicker('refresh');
                }
            });
        });
    });
</script>
@endpush
