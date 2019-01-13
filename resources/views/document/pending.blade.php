@extends('admin.layouts.app')
@section('name', 'Pending Notice/Notification')

@section('content')
    <div class="panel-header panel-header-sm"></div>
    
    <div class="content">
        <div class="card">
            
            <div class="card-header">
                <h4 class="card-title">Pending Notice & Notification</h4>
            </div>
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                        <tr>
                            <th>Publish</th>
                            <th>Date</th>
                            <th>Department</th>
                            <th>Subject</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($documents as $document)
                            <tr>
                                <td>
                                    <form action="{{ route('admin.allow.doc', $document->file) }}" method="post">
                                        {{ method_field('patch') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fa fa-check"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>{{ $document->issued_at->format('d M Y') }}</td>
                                <td>{{ $document->department->name }}</td>
                                <td>{{ $document->subject }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            
            </div>
            <div class="card-footer bg-light text-right">
                These are pending notices and notifications, publish them to make them visible for visitors.
            </div>
        
        </div>
    </div>

@endsection
