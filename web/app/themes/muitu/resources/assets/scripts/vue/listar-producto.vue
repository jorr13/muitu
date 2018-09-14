var urlUsers = 'https://muituhandmade.com/wp-json/wc/v2/products/categories';
var urlProducts= 'https://muituhandmade.com/wp-json/wc/v2/products?category=';
var usuario='ck_c5f42eeda527c36288836f80e03daa4025482670';
var password='cs_7def225ec2e21251c4a48a0c9800cd3701ee0167';
var app = new Vue({
    
    el: '#app',
    created: function(){
        this.getUsers();
    },
    data: {
        lists: [],
        prodcts: [],
    },
    
    methods: {
        getUsers: function() {
            axios.get(urlUsers,{
                auth: {
                    username: usuario,
                    password: password,
                }
            })
            .then(response => {
                console.log(response.data);
                this.lists = response.data;
            });
        },
        obtenerProducto: function (id) {
            axios.get(urlProducts + id, {
                auth: {
                    username: usuario,
                    password: password
                }
            })
            .then(response =>{
                console.log(response.data);
                this.prodcts = response.data;
            })
            .catch(function (error) {
                console.log(error);
            });
        },
    }
}); 
