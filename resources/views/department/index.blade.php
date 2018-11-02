@extends('layouts.dashboard')
@section('title', 'Department List')

@section('content')
    <div class="row">

        <div class="col-8 m-auto">
            <table class="table table-sm table-bordered">
                <thead class="table-active">
                <tr class="text-center text-white">
                    <th scope="col" class="text-uppercase">Name</th>
                    <th scope="col" class="text-uppercase">Type</th>
                    <th scope="col" class="text-uppercase">Documents</th>
                </tr>
                </thead>
                <tbody>
                @foreach(Dept::all() as $item)
                    <tr>
                        <td class="pl-4 text-capitalize">{{$item->name}}</td>
                        <td class="pl-4 text-capitalize">{{$item->type}}</td>
                        <td class="pl-4 text-center text-capitalize">{{count($item->documents)}}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

    </div>
@endsection