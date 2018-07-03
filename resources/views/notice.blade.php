@extends('layouts.app')
@php($size = 4)
@section('content')

        @if(!$notices->isEmpty())

                <h1 class="text-center mb-4">Notices of {{ $dept or 'All' }} Department</h1>

            @foreach( $notices as $item )
                @if ($loop->iteration % $size == 1)
                    <div class="row">
                        @endif

                        <div class="col-3">

                            @include('layouts.nCard')

                        </div>

                        @if ($loop->iteration % $size == 0 or $loop->last)
                    </div>
                @endif
            @endforeach
        @else
            <h2>There is no Notice to show</h2>
        @endif
    @include('layouts.paginate', ['paginator' => $notices])

@endsection