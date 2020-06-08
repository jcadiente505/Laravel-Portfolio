<template>
    <div class="main-container">
        <div class="row">
            <div class="col-12">
                <div id="projectSection" class="project-section py-5 my-5">
                    <h1 class="intro-title text-center" data-aos="fade-down">Projects I've worked on</h1>
                    <span class="outward-line" data-aos="outward-line"></span>
                    <div class="row my-5 py-5">
                        <div class="col-6">
                            <card
                                :img="push"
                                cardTitle="Push"
                                cardDescription="Freelance developer"
                                href="https://www.push.inc/"
                            ></card>
                        </div>
                        <div class="col-6">
                            <card
                                :img="goport"
                                cardTitle="GoPort"
                                cardDescription="Full Stack developer"
                                href="https://www.goport.com/"
                            ></card>
                        </div>
                        <div class="col-6">
                            <card
                                :img="nei"
                                cardTitle="NEI-Corp"
                                cardDescription="Freelance Wordpress developer"
                                href="https://www.nei-corp.com/"
                            ></card>
                        </div>
                        <div class="col-6">
                            <card
                                :img="realpain"
                                cardTitle="realpain"
                                cardDescription="STILL IN DEVELOPMENT"
                                href="/"
                            ></card>
                        </div>
                        <div class="col-12">
                            <div class="resume-download text-center py-5">
                                <a href="/download" class="resume-btn"> Download Resume </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Card from './Card';
    import push from '../../img/push.jpg';
    import goport from '../../img/goport.jpg';
    import nei from '../../img/nei.jpg';
    import realpain from '../../img/realpain.jpg';

    export default {
        components: {
            'card' : Card
        },
        data: function() {
            return {
                push: push,
                goport: goport,
                nei: nei,
                realpain: realpain
            }
        },
        mounted() {
            console.log('navbar mounted')
        }
    }
</script>