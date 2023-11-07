<template>
     <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by <a class="text-primary" href="http://www.iamabdus.com/" target="_blank" >Abdus</a>.
              </p>
            </div>

          </footer>
</template>

<style>
 @import '@/assets/css/bootstrap.min.css';
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
        const cssUrls = [
          '/lib/animate/animate.min.css',
          '/lib/owlcarousel/assets/owl.carousel.min.css',
          '/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css',
        ];
  
        const jsUrls = [
          '/plugins/jquery/jquery.min.js',
          '/plugins/bootstrap/js/bootstrap.bundle.min.js',
          '/plugins/simplebar/simplebar.min.js',
          '/plugins/apexcharts/apexcharts.js',
          '/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js',
          '/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js',
          '/plugins/jvectormap/jquery-jvectormap-world-mill.js',
          '/plugins/jvectormap/jquery-jvectormap-us-aea.js',
          '/plugins/daterangepicker/moment.min.js',
          'plugins/daterangepicker/daterangepicker.js',
          'https://cdn.quilljs.com/1.3.6/quill.js',
          'plugins/toaster/toastr.min.js',
          'js/mono.js',
          'js/chart.js',
          'js/map.js',
         ' js/custom.js',
        ];
  
        const head = document.getElementsByTagName('head')[0];
  
        const loadCss = (index) => {
          if (index < cssUrls.length) {
            const link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = cssUrls[index];
            link.onload = () => {
              loadCss(index + 1);
            };
            head.appendChild(link);
          } else {
            loadJs(0); 
          }
        };
  
        const loadJs = (index) => {
          if (index < jsUrls.length) {
            const script = document.createElement('script');
            script.src = jsUrls[index];
            script.async = true;
            script.onload = () => {
              loadJs(index + 1);
            };
            head.appendChild(script);
          }
        };
  
        loadCss(0);
       
      },
    },
  };
</script>

 