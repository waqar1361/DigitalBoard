@extends('admin.layouts.app')
@section('name', 'Blocked Notice/Notification')

@section('content')
    <div class="panel-header panel-header-sm"></div>
    
    <div class="content">
        <div class="card">
            
            <div class="card-header">
                <h4 class="card-title">Blocked Notice & Notification</h4>
            </div>
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                        <tr>
                            <th>Actions</th>
                            <th>Date</th>
                            <th>Department</th>
                            <th>Subject</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($documents as $document)
                            <tr>
                                <td class="row">
                                    <form action="{{ route('admin.unblock.doc', $document->file) }}" method="post">
                                        {{ method_field('patch') }}
                                        {{ csrf_field() }}
                                        <div class="container-fluid">
                                            <button type="submit" class="btn btn-info btn-sm"
                                                    data-toggle="tooltip" title="Un Block" data-placement="bottom">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </form>
                                    
                                    <button type="button" class="btn btn-danger btn-sm"
                                            data-toggle="modal" data-target="#doc-{{$document->id}}">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
    
                                    <!-- Modal -->
                                    @include('document.components.model')
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
                These are the notices and notifications that are blocked
            </div>
        
        </div>
    </div>

@endsection
