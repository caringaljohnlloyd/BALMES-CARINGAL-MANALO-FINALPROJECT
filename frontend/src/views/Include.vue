
<template>
  <Top/>
  <navbar/>
  <Content/>
  <End/>
</template>

<script>
    import Top from '@/components/Top.vue';
    import navbar from '@/components/navbar.vue';
    import Content from '@/components/Content.vue';
    import End from '@/components/End.vue';
  
    export default {
  name: 'user',
  components: {
    Top,
    navbar,
    Content,
    End
  }
}
</script>