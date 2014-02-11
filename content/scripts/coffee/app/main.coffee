###
 Main application module

 * Add routes with their respective module, one per route.
 * If the same module is needed in two views, include the class instance multiple times
###
define (require) ->
    $ = require('jquery')
    Index = require('app/index')
    require('reveal')
    require('orbit')
    require('offcanvas')

    # Map routes to their modules
    routes =
        'index': Index

    ###
     Class App
    ###
    class App

        constructor: ->
            console.log('Main app module was built without side effects')

        init: ->
            $(document).ready =>
                @$body      = $('body')
                @basePath   = @$body.data('base')
                @assetsPath = @$body.data('assets')
                route       = @$body.data('route')

                @foundation()
                # @events()

                if typeof routes[route] is 'function'
                    module = new routes[route]()
                    module.init()

        events: ->
            $window = $(window)
            $window.on 'scroll.main', (e) =>
                window.requestAnimationFrame =>
                    @disableHover()

            $('.right-off-canvas-toggle').on('click', (e) ->
                e.preventDefault
            )

        disableHover: ->
            clearTimeout(timer);

            if not @$body.hasClass('disable-hover')
                @$body.addClass('disable-hover')

            timer = setTimeout =>
                @$body.removeClass('disable-hover')
            , 500

        foundation: ->
            $(document).foundation 'reveal'
            $(document).foundation(
                'orbit' :
                    animation: 'slide',
                    timer: true,
                    timer_speed : 4000,
                    pause_on_hover: true,
                    animation_speed: 500,
                    navigation_arrows: false,
                    bullets: true,
                    slide_number: false
            )
    return new App
