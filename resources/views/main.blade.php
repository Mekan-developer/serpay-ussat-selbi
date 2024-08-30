<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

        <title>Responsive plants website - Bedimcode</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        @include('includes.header')

        <main class="main">
            <!--==================== HOME ====================-->
            @include('includes.home')

            <!--==================== ABOUT ====================-->
            @include('includes.about')

            <!--==================== STEPS ====================-->
            @include('includes.steps')
            <!--==================== PRODUCTS ====================-->
            @include('includes.products')

            <!--==================== QUESTIONS ====================-->
            @include('includes.questions')

            <!--==================== CONTACT ====================-->
            @include('includes.contact')
        </main>

        <!--==================== FOOTER ====================-->
        @include('includes.footer')
        




        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>
        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
