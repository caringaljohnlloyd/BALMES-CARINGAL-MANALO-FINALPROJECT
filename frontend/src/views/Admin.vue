<template>

    <TopAdmin/>
    <HeaderAdmin/>
    <SidebarAdmin/>
    <ContentAdmin/>
    <EndAdmin/>   

  </template>
  
    <style>
     @import '@/assets/css/bootstrap.min.css';
     @import '@/assets/css/style.css';</style>
    
    <script>
        import TopAdmin from '@/components/TopAdmin.vue';
        import HeaderAdmin from '@/components/HeaderAdmin.vue';
        import SidebarAdmin from '@/components/SidebarAdmin.vue';
        import ContentAdmin from '@/components/ContentAdmin.vue';
        import EndAdmin from '@/components/EndAdmin.vue';
      
        export default {
      name: 'admin',
      components: {
        TopAdmin,
        HeaderAdmin,
        SidebarAdmin,
        ContentAdmin,
        EndAdmin
      }
    }
    </script>