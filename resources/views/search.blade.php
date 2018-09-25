@extends('layouts.app')
@section('content')

    <form action="/browse">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="text" id="search" class="form-control-lg form-control" name="search" value="{{ $search or '' }}" placeholder="" autocomplete="off">
                </div>
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-block btn-lg btn-success">
                    <span class="fa fa-search"></span> Search
                </button>
            </div>
        </div>
        <div class="form-group">
            <div class="row"><!-- Names -->
                <div class="col">
                    <h5 for="type">Type:</h5>
                </div>
                <div class="col">
                    <h5 for="sort-by">Sort By:</h5>
                </div>
                <div class="col">
                    <h5 for="dept">Department:</h5>
                </div>

            </div>
            <div class="row"><!-- Values -->
                <div class="col">
                    <select name="type" id="type" class="custom-select">
                        <option value="all" {{ $type == "all" ? "selected" : "" }}>All</option>
                        <option value="notice" {{ $type == "notice" ? "selected" : "" }}>Notice</option>
                        <option value="notification"{{ $type == "notification" ? "selected" : "" }}>Notification
                        </option>
                    </select>
                </div>
                <div class="col">
                    <select name="sort" id="sort-by" class="custom-select">
                        <option value="latest" {{ $sort == "latest" ? "selected" : "" }} >Latest</option>
                        <option value="oldest" {{ $sort == "oldest" ? "selected" : "" }} >Oldest</option>
                        <option value="alph" {{ $sort == "alph" ? "selected" : "" }} >Alphabets A-Z</option>
                    </select>
                </div>
                <div class="col">
                    <select name="dept" id="dept" class="custom-select">
                        <option value="all" {{ $dept == "all" ? "selected" : "" }}>All</option>
                        @foreach(\App\Department::all() as $item)
                            <option value="{{$item->name}}" {{ $dept == $item->name ? "selected" : "" }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </form>


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

@endsection