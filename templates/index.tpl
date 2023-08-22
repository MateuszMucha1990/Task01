<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 01 - Webmaster</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/css/tiny-slider.css"> -->
    <link rel="stylesheet" href="css/theme.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

    <!-- <script src="/js/jquery-3.6.0.slim.min.js"></script>
    <script src="/js/tiny-slider.js"></script>
    <script src="/js/theme.js"></script> -->
</head>

<body>
    <!-- <div id="app">
        {debug}
    </div> -->
    <div class="container">
        <h1>Best sellers</h1>
        <hr>
        <ul class="controls" id="custom-control">
            <li class="prev">
                <img src="images/prev.svg" alt="">
            </li>
            <li class="next">
                <img src="images/next.svg" alt="">
            </li>
        </ul>
        
        <div class="my-slider">


            {foreach $products as $product}

            <div class="test">
                <div class="items">
                    <img src="{$product.img_url}" alt="img-1"> 
                    <p class="description">{$product.name}</p>

                    <div class="value">
                        {if $product.specific_price}

                        <div class="price_new">{display_price price=$product.price}</div> 
                        <div class="price_old">{display_price price=$product.specific_price.priceWithoutReduction}</div>
                        
                        {else}
                        <div class="price">{display_price price=$product.price}</div> 
                        {/if}
                    </div>
                </div>
            </div>
            {/foreach}
        </div>
    </div>

    <script>
        var slider = tns({
            container: '.my-slider',
            items: 4,
            // controls: false,
             nav:false,
            edgePadding: 20,
            gutter:30,
            responsive:{
                0:{
                    items:1
                },
                400:{
                    items:2
                },
                800:{
                    items:4
                },
            },
            controlsContainer:'#custom-control'
        })
    </script>

    
</body>

</html>