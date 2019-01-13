let app = new Vue({
    el: '.wrapper',
    data: {
        name: '',
        full_name: '',
        type: 'Government',
        nameError: false,
        typeError: false,
        url: '',
        fileLabel: "Choose Your File",
        layout: 'list',
    },
    
    methods: {
        notify(message, Color = 'primary') {
            color = Color;
            $.notify({
                    icon: "now-ui-icons ui-1_bell-53",
                    message: message,
                },
                {
                    type: color,
                    timer: 5000,
                    placement: {
                        from: 'bottom',
                        align: 'right',
                    }
                });
        },
        notifySuccess(message) {
            $.notify({
                    icon: "now-ui-icons ui-1_check",
                    message: message,
                },
                {
                    type: 'success',
                    timer: 2000,
                    placement: {
                        from: 'bottom',
                        align: 'right',
                    }
                });
        },
        notifyFailure(message) {
            $.notify({
                    icon: "now-ui-icons ui-1_simple-remove",
                    message: message,
                },
                {
                    type: 'danger',
                    timer: 2000,
                    placement: {
                        from: 'bottom',
                        align: 'right',
                    }
                });
        },
        saveDept() {
            this.url = $('#form').attr('action');
            axios.post(this.url, this.$data)
                .then(response => this.successful())
                .catch(error => this.failed());
        },
        successful() {
            this.notifySuccess('Successfully Added');
            this.name = '';
        },
        failed() {
            this.notifyFailure('Check for input(s)')
            if (error())
                this.nameError = true;
        },
        light() {
            $.ajax({
                url: "set/cookies",
                type: "get",
                data: {
                    name: 'theme',
                    value: 'light'
                },
            });
            $('#theme').attr('href', 'http://nnb.test/css/theme_light.css');
            $('#light').addClass('disabled');
            $('#dark').removeClass('disabled');
        },
        dark() {
            $.ajax({
                url: "set/cookies",
                type: "get",
                data: {
                    name: 'theme',
                    value: 'dark'
                },
            });
            $('#theme').attr('href', 'http://nnb.test/css/theme_dark.css');
            $('#dark').addClass('disabled');
            $('#light').removeClass('disabled');
        },
        
        grid() {
            $.ajax({
                url: "set/cookies",
                type: "get",
                data: {
                    name: 'layout',
                    value: 'grid'
                }
            });
            $('#list-btn').hide();
            $('#grid-btn').show();
            $('#list').hide();
            $('#grid').show();
            
        },
        list() {
            $.ajax({
                url: "set/cookies",
                type: "get",
                data: {
                    name: 'layout',
                    value: 'list'
                }
            });
            $('#grid-btn').hide();
            $('#list-btn').show();
            $('#grid').hide();
            $('#list').show();
            
        }
    },//End of methods
    
});//End of app(Vue)

$(document).ready(function () {
    
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    
    $(window).scroll(function () {
        if ($(this).scrollTop()) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    
    $("#toTop").click(function () {
        $("html, body").animate({scrollTop: 0}, 500);
    });
    
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
    
    $('.browse-select').on('change', function () {
      $('#browse-form').submit();
    })
});