@extends('users.app')

@section('content')
    
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-folder-o"></i></span>
                
                <div class="info-box-content">
                    <span class="info-box-text">Departments<br>Follows</span>
                    <span class="info-box-number">
                        {{ auth()->user()->departments()->count() }}
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-bookmark-o"></i></span>
                
                <div class="info-box-content">
                    <span class="info-box-text">Bookmarks</span>
                    <span class="info-box-number">
                        {{ auth()->user()->bookmarks()->count() }}
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    
    </div>
    
    
    <div class="box box-300">
        <div class="box-header with-border">
            <strong class="box-title">Latest Feeds</strong>
            
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        
        <div class="box-body chat table-responsive no-padding" id="chat-box">
            @if(auth()->user()->documents())
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Department</th>
                        <th>Subject</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(auth()->user()->documents() as $doc)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $doc->issued_at->format('y-M-d') }}</td>
                            <td>{{ $doc->department->name }}</td>
                            <td>
                                <a href="/browse/{{ $doc->file  }}">{{ $doc->subject }}</a>
    
                                @if($doc->created_at->diffInDays(Carbon::now()) < 8)
                                    <span class="badge pull-right bg-primary">New</span>
                                @endif
                            </td>
                        </tr>
                    
                    
                    @endforeach
                    </tbody>
                </table>
                @else()
                    <div class="container-fluid">
                        <h4>You don't follow any department</h4>
                        <p>Follow some of departments below to get regular update.</p>
                    </div>
                @endif
                {{--@endempty--}}
        </div>
    </div>

@endsection