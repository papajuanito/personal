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

            fixedHeader = ->
                if $window.scrollTop() > $hero.innerHeight() - $header.innerHeight()
                    $header.addClass('is-transparent')
                else
                    $header.removeClass('is-transparent')

            $window.on 'scroll.home', (e) =>
                window.requestAnimationFrame(fixedHeader)
