@extends('layouts.dashboard')
@section('title', 'Department List')

@section('dashboard-content')
    <div class="row">

    <div class="col-4">
        <table class="table table-sm table-striped text-dark table-bordered">
            <thead>
            <tr class="bg-secondary text-center text-white">
                <th scope="col" class="text-uppercase">Government</th>
            </tr>
            </thead>
            <tbody>
            @foreach($govt_depts as $item)
                <tr>
                    <td class="pl-4 text-capitalize">{{$item->name}}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

    <div class="col-4">
        <table class="table table-sm table-striped text-dark table-bordered">
            <thead>
            <tr class="bg-secondary text-center text-white">
                <th scope="col" class="text-uppercase">Semi Government</th>
            </tr>
            </thead>
            <tbody>
            @foreach($semi_govt_depts as $item)
                <tr>
                    <td class="pl-4 text-capitalize">{{$item->name}}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

    <div class="col-4">
        <table class="table table-sm table-striped text-dark table-bordered">
            <thead>
            <tr class="bg-secondary text-center text-white">
                <th scope="col" class="text-uppercase">Private</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pvt_depts as $item)
                <tr>
                    <td class="pl-4 text-capitalize">{{$item->name}}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

    </div>
@endsection