@extends('admin.layouts.app')
@section('name', 'Notice/Notification')

@section('content')
    <div class="panel-header panel-header-sm"></div>
    
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Published Notices & Notifications</h4>
            </div>
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                        <tr>
                            <th>Block</th>
                            <th>Date</th>
                            <th>Department</th>
                            <th>Subject</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($documents as $document)
                            <tr>
                                <td>
                                    <form action="{{ route('admin.block.doc', $document->file) }}" method="post">
                                        {{ method_field('patch') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i>
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
                These are the notices and notifications that are published and visible for visitors
            </div>
        </div>
    </div>

@endsection
