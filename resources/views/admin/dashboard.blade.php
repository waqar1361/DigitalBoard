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
                    <table class="table" id="department-table">
                        <thead class="text-primary">
                        <tr>
                            <th>Name</th>
                            <th>Notices</th>
                            <th>Notifications</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-success" href="{{ route('departments.create') }}">
                    <i class="now-ui-icons ui-1_simple-add"></i>
                    Add new department
                </a>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $.ajax({
            url: '?departments=yes',
            type: "get",
            data: {},
            dataType: 'json',
            success: function (response) {
                $('#department-table').DataTable({
                    data: response,
                    columns: [
                        {
                            data: null,
                            render: function (data) {
                                let html = '<a href="/departments/' + data['name'] + '/edit" title="';
                                if (data['full_name']) {
                                    html += data["full_name"];
                                } else {
                                    html += data["name"];
                                }
                                html += '">' + data['name'] + '</a>';
                                return html;
                            }
                        },
                        {data: 'noticesCount'},
                        {data: 'notificationsCount'},
                    ],
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }

        });

    </script>
@endpush