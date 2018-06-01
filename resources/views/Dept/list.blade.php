@extends('layouts.dashboard')
@section('title', 'Department List')

@section('dashboard-content')

        <table class="table table-secondary text-dark table-bordered">
        <thead>
        <tr class="bg-dark text-center text-white">
                <th scope="col" class="text-uppercase">Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                {{--<th scope="row">{{$item->ID}}</th>--}}
                <td>{{$item->name}}</td>
            </tr>
        @endforeach
        </tbody>

    </table>

@endsection