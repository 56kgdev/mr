<template lang="html">

	<div class="item" :class="{ 'active': index == 1 }">
    <div class="single-slide-item" :style="{ 'background-image': 'url(' + property.largephoto + ')' }">
      <div class="single-slide-item-table">
        <div class="single-slide-item-tablecell">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                  <h2>{{ property.nameproperty }}</h2>
                  <p>{{ property.neighbourhood }}, {{ property.city }}</p>
                
                <div class="home_btn">
                <a @click="goToProperty(property.propertyid, property.nameproperty)" class="app-btn wow bounceIn page-scroll home_btn_color_two" data-wow-delay=".8s"><button style="background:transparent; border-color:transparent; widht:100%;">Ver más</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
import immoService from '@/services/immo'
  export default {
    props: {
      property: { type: Object, required: true },
      index: { type: Number, required: true }
    },
    methods: {
      goToProperty (id,name) {
        let namePropFilt=immoService.normalize(name);
        this.$router.push({ name: 'property', params: {id,namePropFilt}  })
      }
    }
  }
</script>

<style scoped>
  .single-slide-item {
    background-position: center;
    background-size: cover;
  }
</style>
