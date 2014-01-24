###
 Main application module

 * Add routes with their respective module, one per route.
 * If the same module is needed in two views, include the class instance multiple times
###
define (require) ->
    $ = require('jquery')
    Index = require('app/index')
    require('reveal')

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

        disableHover: ->
            clearTimeout(timer);

            if not @$body.hasClass('disable-hover')
                @$body.addClass('disable-hover')

            timer = setTimeout =>
                @$body.removeClass('disable-hover')
            , 500

        foundation: ->
            $(document).foundation 'reveal'

    return new App
