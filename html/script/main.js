const app = new Vue({

    el: "#app",

    data: {
        disksList: [],
        selectedGenre: "All",
    },

    methods: {
        getDisksList: function() {
            axios.get("../controller.php")
            .then(result => {
                this.disksList = result.data;
            })
        }
    },
    
    created() {
        this.getDisksList();
    }

})