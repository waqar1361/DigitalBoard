//$(document).scroll(function(){
//    $('.sidebar').toggleClass('scrolled col-1', $(this).scrollTop() > 1);
//});

let logout = function () {
    event.preventDefault ();
    $ ('#logout-form').submit ();
};


let app = new Vue ({
    el     : '.wrapper',
    data   : {
        name: '',
        url: '',
        errors: false,
    },
    methods: {
        saveDept ()
        {
            this.url = $('#form').attr('action');
            axios.post (this.url , this.$data)
                .then (response => this.successful())
                .catch(error => this.failed());
        },
        successful(){
            $.toaster ({message: "Saved" , priority: 'success'});
            this.name = '';
        },
        failed()
        {
            this.errors = true;
            $.toaster ({message: "Failed: Check Your Inputs" , priority: 'danger'});
        },
    },//End of methods
    
});//End of app(Vue)