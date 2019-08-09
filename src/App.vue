<template lang="html">
  <div id="app">

    <div class="pagewrap page-style-4">
      
    	<ip-preloader></ip-preloader>

    	<ip-header></ip-header>

    	<router-view></router-view>

  	  <ip-footer></ip-footer>
      
    </div>

  </div>
</template>

<script>
import IpPreloader from '@/components/layout/Preloader.vue'
import IpHeader from '@/components/layout/Header.vue'
import IpFooter from '@/components/layout/Footer.vue'

export default {
  name: 'app',
  components: {
    IpPreloader,
  	IpHeader,
  	IpFooter
  }
}
</script>

<style>
	@import './assets/css/main.css';
</style>
