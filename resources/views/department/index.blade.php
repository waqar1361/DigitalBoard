@extends('layouts.dashboard')
@section('title', 'Department List')

@section('dashboard-content')
    <div class="row">

        <div class="col-8 m-auto">
            <table class="table table-striped table-sm table-bordered">
                <thead class="bg-gradient-primary">
                <tr class="text-center text-white">
                    <th scope="col" class="text-uppercase">Name</th>
                    <th scope="col" class="text-uppercase">Type</th>
                </tr>
                </thead>
                <tbody>
                @foreach(Dept::all() as $item)
                    <tr>
                        <td class="pl-4 text-capitalize">{{$item->name}}</td>
                        <td class="pl-4 text-capitalize">{{$item->type}}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

        {{--<div class="col-4">--}}
            {{--<table class="table table-sm table-striped table-bordered">--}}
                {{--<thead class="bg-primary">--}}
                {{--<tr class="text-center text-white">--}}
                    {{--<th scope="col" class="text-uppercase">Semi Government</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--@foreach($semi_govt_depts as $item)--}}
                    {{--<tr>--}}
                        {{--<td class="pl-4 text-capitalize">{{$item->name}}</td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                {{--</tbody>--}}

            {{--</table>--}}
        {{--</div>--}}

        {{--<div class="col-4">--}}
            {{--<table class="table table-sm table-striped table-bordered">--}}
                {{--<thead class="bg-primary">--}}
                {{--<tr class="text-center text-white">--}}
                    {{--<th scope="col" class="text-uppercase">Private</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--@foreach($pvt_depts as $item)--}}
                    {{--<tr>--}}
                        {{--<td class="pl-4 text-capitalize">{{$item->name}}</td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                {{--</tbody>--}}

            {{--</table>--}}
        {{--</div>--}}

    </div>
@endsection