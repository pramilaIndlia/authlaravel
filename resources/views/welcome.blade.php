<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   </head>
   <body id="page-top">
      <div id="wrapper">
         <x-slider/>
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <x-header/>
               <div class="container-fluid">
                @yield('contant')
               </div>
            </div>
         </div>
      </div>
   </body>
</html>