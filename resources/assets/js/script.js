window.app = app = new Vue ({
    el     : '.wrapper',
    data   : {
        name      : '',
        type      : 'govt',
        url       : '',
        fileLabel : "Choose PDF File",
    },
    methods: {
        saveDept ()
        {
            this.url = $ ('#form').attr ('action');
            axios.post (this.url, this.$data)
            .then (response => this.successful ())
            .catch (error => this.failed ());
        },
        successful ()
        {
            toastr["success"] ("Department", "successfully added");
            this.name = '';
        },
        failed ()
        {
            if (error ())
                this.typeError = true;
            if (error ())
                this.nameError = true;
            toastr ["danger"] ("Error", "check inputs");
        }
    },//End of methods
    
});//End of app(Vue)