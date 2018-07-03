let app = new Vue ({
    el     : '.wrapper',
    data   : {
        name      : '',
        type      : 'govt',
        url       : '',
        fileLabel : "Choose PDF File",
        nameError    : false,
        typeError    : false,
        titleError: false,
        fileError : false,
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
            $.toaster ({message: "Saved", priority: 'success'});
            this.name = '';
        },
        failed ()
        {
            if(error())
            this.typeError = true;
            if(error())
            this.nameError = true;
            $.toaster ({message: "Failed: Check Your Inputs", priority: 'danger'});
        },
    },//End of methods
    
});//End of app(Vue)