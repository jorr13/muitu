<template>
    <div>
        <h2 class="title">List of all pages</h2>
        <!--posts start here-->
        <div class="posts-container columns is-multiline">
            <div v-for="(post, index) in posts" :key="index" class="column is-3 post-item animated fadeInUp">
                <a :href='post.link'>
                    <img :src="post.fimg_url"  />
                    <h2 class="title">{{post.title.rendered}}</h2>
                    <div class="excerpt" v-html="post.excerpt.rendered"></div>
                </a>
            </div>
        </div>

        <pagination :pagination="pagination" @prev="--postsData.page; getPosts();" @next="postsData.page++; getPosts();">
        </pagination>
    </div>

</template>

<script>
  export default {
            endpoint: '/wp-json/wp/v2/pages/?_embed',
            per_page: 4,
    }

</script>

<style lang="scss" scoped>

</style>
