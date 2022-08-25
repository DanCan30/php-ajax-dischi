const app = new Vue({

    el: "#app",

    data: {
        disksList: [],
    },

    methods: {
        getDisksList: function() {
            axios.get("../controller.php")
            .then(result => {
                this.disksList = result.data;
                console.log(this.disksList);
            })
        }
    },
    
    created() {
        this.getDisksList();
    }

})