@extends('layouts.app')
@section('page','landing')
@section('header')

    <div class="page-header page-header-small clear-filter" filter-color="">
        <div class="page-header-image" data-parallax="true" style="background-image:url({{config('app.image-path')}});">
        </div>
        <div class="container">
            <div class="rounded py-3">
                <form action="/browse" id="browse-form">
                    <section class="col-md-11 m-auto">

                        <h3>Search Term:</h3>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text"
                                           id="search"
                                           class="form-control form-control-lg bg-light"
                                           name="search"
                                           value="{{ old('search') }}"
                                           placeholder="Search"
                                           autofocus
                                           autocomplete="off">
                                </div>
                            </div>
                        </div>

                    </section>

                    <section class="m-auto col-md-11">
                        <div class="form-group">
                            {{-- NAMESS --}}
                            <div class="row">
                                <div class="col">
                                    <label for="type">Type :</label>
                                </div>
                                <div class="col">
                                    <label for="sort-by">Sort By :</label>
                                </div>
                                <div class="col">
                                    <label for="dept" data-toggle="tooltip" data-placement="right" title="Department">Dept
                                        :</label>
                                </div>
                                <div class="col d-xs-none">
                                    <label for="year">Year :</label>
                                </div>
                                <div class="col d-xs-none">
                                    <label for="month">Month :</label>
                                </div>

                            </div>
                            {{-- Values --}}
                            <div class="row">
                                {{-- TYPE --}}
                                <div class="col">
                                    <select name="type" id="type" class="browse-select custom-select custom-select-sm">
                                        <option value="all" {{ request('type') == "all" ? "selected" : "" }}>All
                                        </option>
                                        <option value="notice" {{ request('type') == "notice" ? "selected" : "" }}>
                                            Notice
                                        </option>
                                        <option value="notification"
                                                {{ request('type') == "notification" ? "selected" : ""}}>
                                            Notification
                                        </option>
                                    </select>
                                </div>
                                {{-- SORT --}}
                                <div class="col">
                                    <select name="sort" id="sort-by"
                                            class="browse-select custom-select custom-select-sm">
                                        <option value="latest" {{ request('sort') == "latest" ? "selected" : "" }} >
                                            Latest
                                        </option>
                                        <option value="oldest" {{ request('sort') == "oldest" ? "selected" : "" }} >
                                            Oldest
                                        </option>
                                        <option value="alph" {{ request('sort') == "alph" ? "selected" : "" }} >
                                            Alphabets A-Z
                                        </option>
                                    </select>
                                </div>
                                {{-- DEPARTMENT --}}
                                <div class="col">
                                    <select name="dept" id="dept" class="browse-select custom-select custom-select-sm">
                                        <option value="all" {{ request('dept') == "all" ? "selected" : "" }}>All
                                        </option>
                                        @foreach( $departments as $item )
                                            <option class="text-capitalize" value="{{$item->name}}" {{ request('dept') == $item->name
                                    ? "selected" : "" }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- YEAR --}}
                                <div class="col d-xs-none">
                                    <select name="year" id="year" class="browse-select custom-select custom-select-sm">
                                        <option value="all" {{ request('year') == "all" ? "selected" : "" }}>All
                                        </option>
                                        @foreach( $years as $year )
                                            <option value="{{$year->name}}" {{ request('year') == $year->name ? "selected" : "" }}>
                                                {{ $year->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- MONTH --}}
                                <div class="col d-xs-none">
                                    <select name="month" id="month"
                                            class="browse-select custom-select custom-select-sm">
                                        <option value="all" {{ request('month') == "all" ? "selected" : "" }}>All
                                        </option>
                                        @foreach( months() as $item )
                                            <option value="{{$item}}" {{ request('month') == $item ? "selected" : "" }}>
                                                {{ $item }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content')

    {{-- Show results  --}}

    <section id="search-results">
        <section class="container-fluid">
            <div class="row">
                <div class="col-10">
                    <h3 class="text-center mb-4">{{ $total }} Result(s) Found</h3>
                </div>
                <div class="col-2">
                    <button id="list-btn" class="btn btn-sm btn-secondary"
                            data-toggle="tooltip" data-placement="bottom" title="list view"
                            @click="grid"
                            style="{{ $_COOKIE['layout'] != 'list' ? "display: none" : "" }}">
                        <i class="fa fa-list"></i>
                    </button>
                    <button id="grid-btn" class="btn btn-sm btn-secondary"
                            data-toggle="tooltip" data-placement="bottom" title="grid view"
                            @click="list"
                            style="{{ $_COOKIE['layout'] != 'grid' ? "display: none" : "" }}">
                        <i class="fa fa-th"></i>
                    </button>
                </div>
            </div>

            @include('document.list')
            @include('document.grid')

        </section>
    </section>

    <section class="mt-4">
        @include('layouts.paginate',['paginator' => $results])
    </section>

@endsection