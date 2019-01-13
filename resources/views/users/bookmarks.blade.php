@extends('users.app')

@section('content')
    
    <div class="box box-info box-300">
        <div class="box-header with-border">
            <strong class="box-title">Book Marks</strong>
            
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        
        <div class="box-body table-responsive no-padding">
            @if(auth()->user()->bookmarks->count())
                
                
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Date</th>
                        <th>Department</th>
                        <th>Subject</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(auth()->user()->bookmarks as $doc)
                        <tr>
                            <td><a href="{{ route('unmark.document',$doc->file) }}"><i class="fa fa-trash"></i></a></td>
                            <td>{{ $doc->issued_at->format('y-M-d') }}</td>
                            <td>{{ $doc->department->name }}</td>
                            <td>
                                <a href="/browse/{{ $doc->file  }}">{{ $doc->subject }}</a>
                            </td>
                        </tr>
                    
                    @endforeach
                    </tbody>
                </table>
            @else
                <div class="container-fluid">
                    <h4>Nothing saved yet</h4>
                    <p>Start <a href="/browse">browsing</a> now</p>
                </div>
            @endif
        </div>
        <div class="box-footer text-right">Notices or Notifications you saved</div>
    </div>


@endsection