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
            $hero = $("#home-hero")
            $current = 1;

            fixedHeader = ->
                if $window.scrollTop() > $hero.innerHeight() - $header.innerHeight()
                    $header.addClass('is-transparent')
                else
                    $header.removeClass('is-transparent')

            $window.on 'scroll.home', (e) =>
                window.requestAnimationFrame(fixedHeader)


            galleryCallback =  ->
                $current++
                $hero.css(
                    background: "#c3c3c3 url('../img/header/header-" + $current +  ".jpg') center 40px no-repeat";
                    "background-size": "cover";
                )

            gallery = setInterval galleryCallback($hero), 2000
