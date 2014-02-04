###
 View: index
###
define (require) ->

    class Index

        init: ->
            console.log('Home init')
            @events()

        events: ->
            $window = $(window)
            $header = $('#header')
            $assets = $('body').data('assets')
            $hero = $("#home-hero")
            $current = 1
            $images = []

            preload = ->
                i = 0
                while i < preload.arguments.length
                    $images[i] = new Image()
                    $images[i].src = preload.arguments[i]
                    i++

                galleryInterval = setInterval( ->
                    if($current <= 3)
                        $current++
                    else
                        $current = 1;

                    $hero.css(
                        background: "url('../img/header/header-" + $current +  ".jpg') center 40px no-repeat";
                        "background-size": "cover";
                    )
                , 4000)


            if(!$hero.hasClass('mobile'))
                console.log($hero.hasClass('mobile'))
                preload(
                    $assets + 'img/header/header-2.jpg',
                    $assets + 'img/header/header-3.jpg',
                    $assets + 'img/header/header-4.jpg',
                )

            fixedHeader = ->
                if $window.scrollTop() > $hero.innerHeight() - $header.innerHeight()
                    $header.addClass('is-transparent')
                else
                    $header.removeClass('is-transparent')

            $window.on 'scroll.home', (e) =>
                window.requestAnimationFrame(fixedHeader)

