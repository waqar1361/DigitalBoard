let app = new Vue ({
    el     : '.wrapper',
    data   : {
        name      : '',
        type      : 'Government',
        nameError: false,
        typeError: false,
        url       : '',
        fileLabel : "Choose Your File",
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
            $.toaster("Successfully Added");
            this.name = '';
        },
        failed ()
        {
            $.toaster ("Invalid Input", '','danger');
            if (error ())
                this.typeError = true;
            if (error ())
                this.nameError = true;
        }
    },//End of methods
    
});//End of app(Vue)