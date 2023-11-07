
<template>
    <Top_Admin/>
    <Header_Admin/>
    <Sidebar_Admin/>
    <Content_Admin/>
    <End_Admin/>

  </template>
  <style>
   @import '@/assets/css/bootstrap.min.css';
   @import '@/assets/css/style.css';</style>
  
  <script>
      import Top_Admin from '@/components/Top_Admin.vue';
      import Header_Admin from '@/components/Header_Admin.vue';
      import Sidebar_Admin from '@/components/Sidebar_Admin.vue';
      import Content_Admin from '@/components/Content_Admin.vue';
      import End_Admin from '@/components/End_Admin.vue';
    
      export default {
    name: 'admin',
    components: {
      Top_Admin,
      Header_Admin,
      Sidebar_Admin,
      Content_Admin,
      End_Admin
    }
  }
  </script>