
var app = new Vue({
    el: '#app',
    data: {
        myArray: [],
        generi: [],
        currentGenere: ''
    },
    methods: {
        getSelectApi(){
            this.myArray = [];

            axios.get('http://localhost/php-ajax-dischi/client-side/api.php' + '?genere=' + this.currentGenere)
            .then(response => {
            this.myArray = response.data;
        })

            console.log(this.currentGenere)
        }

    },
    created() {

        axios.get('http://localhost/php-ajax-dischi/client-side/api.php')
        .then(response => {
            this.myArray = response.data;

            this.myArray.forEach(element => {

                if (!this.generi.includes(element.genre)) {
                    this.generi.push(element.genre);
                };

            });
        });


    }
})
