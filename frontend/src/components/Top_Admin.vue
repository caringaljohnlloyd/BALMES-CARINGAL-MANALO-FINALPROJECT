<template>
   <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-name" content="mono"/>

  <title>Mono - Responsive Admin & Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="plugins/simplebar/simplebar.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/nprogress/nprogress.css" rel="stylesheet" />
  
  
  
  
  <link href="plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />
  
  
  
  <link href="plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  
  
  
  <link href="plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  
  
  
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  
  
  
  <link href="plugins/toaster/toastr.min.css" rel="stylesheet" />
  
  
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="css/style.css" />

  


  <!-- FAVICON -->
  <link href="images/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</template>
<style>
 @import '@/assets/css/bootstrap.min.css';
 @import '@/assets/css/style.css';
 @import '@/assets/css/style2.css';
 </style>

<script>
export default {
  mounted() {
   
    this.loadExternalResources();
  },
  methods: {
    loadExternalResources() {
    
      const resourceUrls = [
        'img/favicon.ico',
        'plugins/material/css/materialdesignicons.min.css',
        'plugins/simplebar/simplebar.css',
        'plugins/nprogress/nprogress.css',
        'plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css',
        'plugins/jvectormap/jquery-jvectormap-2.0.3.css',
        'plugins/daterangepicker/daterangepicker.css',
        'https://cdn.quilljs.com/1.3.6/quill.snow.css',
        'plugins/toaster/toastr.min.css',
        'css/bootstrap.min.css',
        'css/style.css',
      ];

    
      resourceUrls.forEach((url) => {
        const link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = url;
        document.head.appendChild(link);
      });

      const favicon = document.createElement('link');
      favicon.rel = 'icon';
      favicon.href = 'img/favicon.ico';
      document.head.appendChild(favicon);
    },
  },
};
</script>