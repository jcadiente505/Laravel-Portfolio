<template>
    <div class="content" data-aos="fade-up">
        <a :href="href" target="_blank">
        <div class="content-overlay"></div>
        <img class="content-image" :src="img">
        <div class="content-details fadeIn-bottom">
            <h3 class="content-title" >{{ cardTitle }}</h3>
            <p class="content-text">{{ cardDescription }}</p>
        </div>
        </a>
    </div>
</template>

<script>
export default {
    props: ['cardTitle', 'cardDescription', 'img', 'href']
}
</script>