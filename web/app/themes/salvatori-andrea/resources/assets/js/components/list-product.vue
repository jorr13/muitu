<template>


<div class="contenedor-product-categoria ">

    <div class="sliderheader">
        <carousel :mouse-drag="true" :Touch-friendly="true" :navigationEnabled="true" :perPageCustom="[[480, 2], [600, 3], [1280, 4]]" >
            <slide v-for="(item, index) in lists" :key="index" :class="{ 'is-hidden': index === 0 }">
            <a href="javascript:void(0)" v-on:click="obtenerProducto(item.id), hola()" v-bind:data-id="item.id" ref="el">
                {{ item.name }}
            </a>
            </slide>
        </carousel>
    </div>


   <div class="containerposts containerproduct hamacas">
        <carousel :mouse-drag="true" :Touch-friendly="true" :navigationEnabled="true" :paginationEnabled="false" :perPageCustom="[[480, 2], [600, 3], [1280, 4]]" >
            <div class="cargando hidden">
                <img src="/app/uploads/2018/06/cropped-iso-muitu-1-1-300x300.png" alt="">
            </div>
            <span class="nohayproduct" style="padding: 100px 50px 80px; margin: 0 auto;" v-if="prodcts == ''">No hay productos para mostrar en este momento. Lo sentimos.</span>
            <slide v-for="(producto, index) in prodcts" :key="index" class="productitem" >
      <a :href='producto.permalink'>
        <div class="imgprod">
          <!--Esto es el thumb-->
            <img :src="producto.images['0'].src" alt="">
        </div>
          <div class="contenidoproduct">
            <h1>{{ producto.name }}</h1>
          </div>
          <a :href='producto.permalink' class="boton-slider-producto">Ver Producto</a>
        </a>
            </slide>
        </carousel>
    </div>
     <div class=" column botoncontainer ir-a-tienda">
      <a class="botonposts botonfooter" href="/shop">Ir a nuestra tienda</a>
     </div>
</div>



</template>

<script>
import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);
import { Carousel, Slide } from 'vue-carousel';

export default {

         data() { 
            return {
                lists: [],
                prodcts: [],
                Carousel,
                Slide
            }
        },
    beforeUpdate: function () {
        console.log('listo');
        $('.cargando').fadeOut();
    },
        mounted() {
            this.getUsers();
            this.obtenerProducto(32);
        },
        methods: {
            getUsers: function() {
                axios.get(this.$urlUsers,{
                    auth: {
                        username: this.$usuario,
                        password: this.$password,
                    }
                })
                .then(response => {
                    console.log(response.data);
                    this.lists = response.data;
                });
            },
            obtenerProducto: function (id) {
                axios.get(this.$urlProducts + id, {
                    auth: {
                        username: this.$usuario,
                        password: this.$password
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
            
            hola: function() {
                this.$nextTick(() => {
                $('.cargando').fadeIn();
                });
            }



        }
           }

</script>
