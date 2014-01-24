define (require) ->
    $ = require('jquery')
    app = require('app/main')

    $(document).ready ->
        app.init()
