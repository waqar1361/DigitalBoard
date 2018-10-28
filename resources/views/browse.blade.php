@extends('layouts.app')
@section('content')
    
    <form action="/browse">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="text" id="search" class="form-control-lg form-control" name="search"
                           value="{{ $search or '' }}" placeholder="Browse" autocomplete="off">
                </div>
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-block btn-lg btn-success">
                    <span class="fa fa-search"></span>
                    <span class="d-sm-none d-xs-none">Search</span>
                </button>
            </div>
        </div>
        <div class="form-group">
            {{-- NAMESS --}}
            <div class="row">
                <div class="col">
                    <h5 for="type">Type :</h5>
                </div>
                <div class="col">
                    <h5 for="sort-by">Sort By :</h5>
                </div>
                <div class="col">
                    <h5 for="dept">Department :</h5>
                </div>
                <div class="col d-xs-none">
                    <h5 for="dept">Year :</h5>
                </div>
                <div class="col d-xs-none">
                    <h5 for="dept">Month :</h5>
                </div>
            
            </div>
            {{-- Values --}}
            <div class="row">
                {{-- TYPE --}}
                <div class="col">
                    <select name="type" id="type" class="custom-select">
                        <option value="all" {{ $type == "all" ? "selected" : "" }}>All</option>
                        <option value="notice" {{ $type == "notice" ? "selected" : "" }}>Notice</option>
                        <option value="notification"{{ $type == "notification" ? "selected" : "" }}>Notification
                        </option>
                    </select>
                </div>
                {{-- SORT --}}
                <div class="col">
                    <select name="sort" id="sort-by" class="custom-select">
                        <option value="latest" {{ $sort == "latest" ? "selected" : "" }} >Latest</option>
                        <option value="oldest" {{ $sort == "oldest" ? "selected" : "" }} >Oldest</option>
                        <option value="alph" {{ $sort == "alph" ? "selected" : "" }} >Alphabets A-Z</option>
                    </select>
                </div>
                {{-- DEPARTMENT --}}
                <div class="col">
                    <select name="dept" id="dept" class="custom-select">
                        <option value="all" {{ $dept == "all" ? "selected" : "" }}>All</option>
                        @foreach( Dept::all() as $item )
                            <option value="{{$item->name}}" {{ $dept == $item->name ? "selected" : "" }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                {{-- YEAR --}}
                <div class="col d-xs-none">
                    <select name="year" id="year" class="custom-select">
                        <option value="all" {{ $year == "all" ? "selected" : "" }}>All</option>
                        @foreach( Doc::years() as $item )
                            <option value="{{$item->year}}" {{ $year == $item->year ? "selected" : "" }}>
                                {{ $item->year }}
                            </option>
                        @endforeach
                    </select>
                </div>
                {{-- MONTH --}}
                <div class="col d-xs-none">
                    <select name="month" id="month" class="custom-select">
                        <option value="all" {{ $month == "all" ? "selected" : "" }}>All</option>
                        @foreach( Doc::months() as $item )
                            <option value="{{$item->month}}" {{ $month == $item->month ? "selected" : "" }}>
                                {{ $item->month }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </form>
    
    <hr>
    {{-- Show results  --}}
    <section>
        @if(!count($results))
            No result found, Try Again
        @endif
        @foreach($results as $row)
            <div class="card bg-dark p-2 mb-2">
                <a href="browse/{{ $row->file }}">
                    <h5 title="subject">{{$row->subject}}</h5>
                </a>
                <section class="text-muted" title="Information">
                    <strong>Department : </strong> {{ $row->department->name }} ,
                    <strong>Date issued : </strong> {{  $row->issued_at->format("dS M, Y") }}
                </section>
            </div>
        @endforeach
    </section>
    <section class="mt-4">
        @include('layouts.paginate',['paginator' => $results])
    </section>
@endsection