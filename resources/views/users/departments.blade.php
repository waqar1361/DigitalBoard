@extends('users.app')

@section('content')
    <section>
        
        <div class="box box-success box-300">
            <div class="box-header">
                <strong class="box-title">Followed Departments</strong>
                
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            
            <div class="box-body">
                
                @if(auth()->user()->departments->count())
                    <table class="table">
                        
                        @foreach(auth()->user()->departments as $dept)
                            <tr>
                                <td>
                                    <a data-toggle="tooltip" data-placement="top" title="unlink"
                                       href="{{route('dept.unfollow',$dept->name)}}">
                                        <i class="fa fa-unlink"></i>
                                    </a>
                                    <span class="mr-l">{{ $dept->name }}</span>
                                </td>
                            </tr>
                        @endforeach
                    
                    </table>
                @endif
                @if(! auth()->user()->departments->count())
                    <div class="container-fluid">
                        <h4>You don't follow any department</h4>
                        <p>Follow some of departments below to get regular update.</p>
                    </div>
                @endif
            
            </div>
            <div class="box-footer text-right">List of Department(s) you are following</div>
        </div>
        
        
        <div class="box box-primary">
            <div class="box-header">
                <strong class="box-title">Departments that can be followed</strong>
                
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            
            <div class="box-body">
                
                @if(auth()->user()->suggestions()->count())
                    <table class="table table-responsive">
                        
                        @foreach(auth()->user()->suggestions() as $dept)
                            <tr>
                                <td>
                                    <a data-toggle="tooltip" data-placement="top" title="link"
                                       href="{{route('dept.follow',$dept->name)}}">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <span class="mr-l">{{ $dept->name }}</span>
                                </td>
                            </tr>
                        @endforeach
                    
                    </table>
                @endif
                @if(! auth()->user()->suggestions()->count())
                    <div class="container-fluid">
                        <h4>There's nothing to follow yet.</h4>
                    </div>
                @endif
            
            </div>
            <div class="box-footer text-right">List of Department(s) you can follow</div>
        </div>
    
    </section>
@endsection