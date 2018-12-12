@extends('admin.layouts.app')
@section('name','Dashboard')
@section('content')
    
    <div class="panel-header panel-header-lg">
        <canvas id="yearDocChart"></canvas>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Departments</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                        <tr>
                            <th>Name</th>
                            <th>Notices</th>
                            <th>Notifications</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(Dept::orderBy('name')->get() as $dept)
                           <tr class="text-capitalize">
                               <td>{{ $dept->name }}</td>
                               <td>{{ count($dept->notices) == 0 ? "-" : count($dept->notices) }}</td>
                               <td>{{ count($dept->notifications) == 0 ? "-" : count($dept->notifications) }}</td>
                           </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-success" href="{{ route('admin.create.dept') }}">
                    <i class="now-ui-icons ui-1_simple-add"></i>
                    Add new department
                </a>
            </div>
        </div>
    </div>
    <script>
        let records = {!! $data !!};
    </script>
@endsection