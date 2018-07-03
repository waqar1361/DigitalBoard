@section('script')
    @if(count($errors))
        <script>
            @if ($errors->has('title'))
                app.titleError = true;
            @endif
                    @if ($errors->has('upload_file'))
                app.fileError = true;
            @endif
            $.toaster ({message: "Invalid Input(s)", priority: 'danger'});
        </script>
    @endif
@endsection