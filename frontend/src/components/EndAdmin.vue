<template>
  <footer class="footer mt-auto">
    <div class="copyright bg-white">
      <p>
        &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by
        <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
      </p>
    </div>
  </footer>


 
</template>

<style >
      @import  '@/assets/plugins/material/css/materialdesignicons.min.css';
        @import  '@/assets/plugins/simplebar/simplebar.css';
        @import  '@/assets/plugins/nprogress/nprogress.css';
        @import  '@/assets/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css';
        @import   '@/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css';
        @import    '@/assets/plugins/daterangepicker/daterangepicker.css';
        @import    'https://cdn.quilljs.com/1.3.6/quill.snow.css';  
        @import     '@/assets/plugins/toaster/toastr.min.css';
        @import '@/assets/css/style.css';
</style>

<script>
export default {
  name: "Admin",
  mounted() {
    this.loadScripts();
  },
  methods: {
    loadScripts() {
      const scriptUrls = [
        'https://code.jquery.com/jquery-3.6.4.min.js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js',
        'plugins/jquery/jquery.min.js',
        'plugins/bootstrap/js/bootstrap.bundle.min.js',
        'plugins/simplebar/simplebar.min.js',
        'https://unpkg.com/hotkeys-js/dist/hotkeys.min.js',
        'plugins/apexcharts/apexcharts.js',
        'plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js',
        'plugins/daterangepicker/moment.min.js',
        'plugins/daterangepicker/daterangepicker.js',
        'https://cdn.quilljs.com/1.3.6/quill.js',
        'plugins/toaster/toastr.min.js',
        'plugins/nprogress/nprogress.js',
        'js/mono.js',
        'js/chart.js',
        'js/map.js',
        'js/custom.js',
        'plugins/jvectormap/jquery-jvectormap-2.0.3.min.js',
        'plugins/jvectormap/jquery-jvectormap-world-mill.js',
        'plugins/jvectormap/jquery-jvectormap-us-aea.js',
      ];

      const head = document.getElementsByTagName('head')[0];

      const loadScript = (index) => {
        if (index < scriptUrls.length) {
          const script = document.createElement('script');
          script.src = scriptUrls[index];
          script.async = true;
          script.onload = () => loadScript(index + 1);
          head.appendChild(script);
        }
      };

      loadScript(0);
    },
  },
};
</script>
