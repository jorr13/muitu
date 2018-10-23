<template>



<div class="posts columns">     
    <div class="containerposts columns is-multiline">
        <h1 class="titlearriba animated fadeInUp">Articulos recientes</h1><br>
        <p class="conteposts animated fadeInUp">Conoce sobre las comunidades que le han dado vida a cada producto que distribuimos, su cultura, su lenguaje y su amor</p><br>
         
    <!--Esta pagina es de productos-->

    <div v-for="(post, index) in posts" :key="index" class="containerpost column is-9 an">
      <div class="img-container">
      <!--Esto es el thumb-->
        <img :src="post.fimg_url"  />
      </div>
      <a :href='post.link' class="link posts-link">
      <div class="contenido">
        <h4 class="titleposts posts-title">
        <!--Esto es el titulo-->
        {{post.title.rendered}}</h4>
        <p class="excerpt posts-excerpt" v-html="post.excerpt.rendered">
        <!--esto es el excerpt--></p>
      </div>
      </a>
    </div>   

        <pagination :pagination="pagination" @prev="--postsData.page; getPosts();" @next="postsData.page++; getPosts();">
        </pagination>
  </div>
</div>


</template>

<script>
    export default {
            endpoint: '/wp-json/wp/v2/posts/?_embed',
            per_page: 4,
    }

</script>

<style lang="scss" scoped>

</style>
