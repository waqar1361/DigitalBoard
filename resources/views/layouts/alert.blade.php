@if(session('message'))
    <script>
        try {
            {{session('method')}}('{{session('message')}}');
        } catch (e) {
            $.notify({
                    icon: "now-ui-icons ui-1_check",
                    message: '{{session('message')}}',
                },
                {
                    type: 'warning',
                    timer: 2000,
                    placement: {
                        from: 'bottom',
                        align: 'right',
                    },
                });
        }
    </script>
@endif