/**
 * Configuration options (RequireJS)
 * http://requirejs.org/docs/api.html#config
 */
require({
    name: 'main',
    map: {
        '*': {
            css: '../../bower_components/require-css/css'
        }
    },
    paths: {
        // facebook: '//connect.facebook.net/en_US/all',
        // twitter: '//platform.twitter.com/widgets',
        // gplusone: '//apis.google.com/js/plusone',
        // gmaps: '//maps.googleapis.com/maps/api/js?key=AIzaSyBms843v8qEZAvDRFMlxpYPufx0rWFvvyw&sensor=true',
        foundation: '../../bower_components/foundation/js/foundation',
        reveal: '../../bower_components/foundation/js/foundation/foundation.reveal',
        jquery: '../../bower_components/jquery/jquery',
        modernizr: '../../bower_components/modernizr/modernizr',
        microplugin: '../../bower_components/microplugin/src/microplugin',
        'normalize-css': '../../bower_components/normalize-css/normalize.css',
        requirejs: '../../bower_components/requirejs/require',
        'require-css': '../../bower_components/require-css/css',
        // sifter: '../../bower_components/sifter/sifter',
        'jquery.finger': '../../bower_components/jquery.finger/dist/jquery.finger',
        mathsass: '../../bower_components/mathsass/dist/math.scss',
        scut: '../../bower_components/scut/dist/_scut.scss',
        // bootstrap: '../../bower_components/bootstrap/dist/js/bootstrap',
        // selectize: '../../bower_components/selectize/dist/js/selectize',
        async: '../../bower_components/requirejs-plugins/src/async',
        depend: '../../bower_components/requirejs-plugins/src/depend',
        font: '../../bower_components/requirejs-plugins/src/font',
        // goog: '../../bower_components/requirejs-plugins/src/goog',
        image: '../../bower_components/requirejs-plugins/src/image',
        json: '../../bower_components/requirejs-plugins/src/json',
        // mdown: '../../bower_components/requirejs-plugins/src/mdown',
        // noext: '../../bower_components/requirejs-plugins/src/noext',
        // propertyParser: '../../bower_components/requirejs-plugins/src/propertyParser',
        // 'Markdown.Converter': '../../bower_components/requirejs-plugins/lib/Markdown.Converter',
        text: '../../bower_components/requirejs-plugins/lib/text',
        // leaflet: '//cdn.leafletjs.com/leaflet-0.7.1/leaflet'
    },
    shim: {
        foundation: {
            deps: [
                'jquery'
            ]
        },
        reveal: {
            deps: [
                'foundation'
            ]
        },
        // 'jquery.finger': {
        //     deps: [
        //         'jquery'
        //     ]
        // }
    }
}, ['start']);
