
var app = new Vue({
    el: '#app',
    data: {
        myArray: [],
    },
    created() {

        axios.get('http://localhost/php-ajax-dischi/server-side/api.php')
        .then(response => {
            this.myArray = response.data;
        })

    }
})
