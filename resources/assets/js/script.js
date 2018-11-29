let app = new Vue({
    el: '.wrapper',
    data: {
        name: '',
        type: 'Government',
        nameError: false,
        typeError: false,
        url: '',
        fileLabel: "Choose Your File",
        layout : 'list',
    },
    methods: {
        saveDept() {
            this.url = $('#form').attr('action');
            axios.post(this.url, this.$data)
                .then(response => this.successful())
                .catch(error => this.failed());
        },
        successful() {
            $.toaster("Successfully Added");
            this.name = '';
        },
        failed() {
            $.toaster("Invalid Input", '', 'danger');
            if (error())
                this.typeError = true;
            if (error())
                this.nameError = true;
        },
        light(){
            $.ajax({
                url: "set/cookies",
                type: "get",
                data : {
                    name : 'theme',
                    value : 'light'
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
                data : {
                    name : 'theme',
                    value : 'dark'
                },
            });
            $('#theme').attr('href', 'http://nnb.test/css/theme_dark.css');
            $('#dark').addClass('disabled');
            $('#light').removeClass('disabled');
        },
        
        grid () {
            $.ajax({
                url: "set/cookies",
                type: "get",
                data : {
                    name : 'layout',
                    value : 'grid'
                }
            });
            $('#list-btn').hide();
            $('#grid-btn').show();
            $('#list').hide();
            $('#grid').show();
            
        },
        list () {
            $.ajax({
                url: "set/cookies",
                type: "get",
                data : {
                    name : 'layout',
                    value : 'list'
                }
            });
            $('#grid-btn').hide();
            $('#list-btn').show();
            $('#grid').hide();
            $('#list').show();
            
        }
    },//End of methods
    
});//End of app(Vue)

$(window).scroll(function () {
    if ($(this).scrollTop()) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
});

// let app2 = new Vue({
//     el: "#test",
//     methods: {
//         testit() {
//             console.log('testing')
//         },
//         light() {
//         },
//         dark() {
//
//         },
//     },
//
//
// });


$("#toTop").click(function () {
    $("html, body").animate({scrollTop: 0}, 500);
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

