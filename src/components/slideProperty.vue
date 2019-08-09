<template lang="html">

	<div class="item" :class="{ 'active': index == 0 }">
    <div class="single-slide-item" :style="{ 'background-image': 'url(' + property.photos[1] + ')' }">
      <div class="single-slide-item-table">
        <div class="single-slide-item-tablecell">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                  <h2>{{ property.propiedad }}</h2>
                  <p>{{ property.city }}</p>
                <div class="home_btn">
                  <!-- <a @click="goToProperty(property.propertyid)" class="app-btn wow bounceIn page-scroll home_btn_color_two" data-wow-delay=".8s">Ver más</a> -->
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
  export default {
    props: {
      //property: { type: Object, required: true },
      index: { type: Number, required: true }
    },
    methods: {
      goToProperty (id) {
        this.$router.push({ name: 'property', params: { id } })
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