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
        foundation: '../../bower_components/foundation/js/foundation',
        reveal: '../../bower_components/foundation/js/foundation/foundation.reveal',
        orbit: '../../bower_components/foundation/js/foundation/foundation.orbit',
        offcanvas: '../../bower_components/foundation/js/foundation/foundation.offcanvas',
        jquery: '../../bower_components/jquery/jquery',
        modernizr: '../../bower_components/modernizr/modernizr',
        microplugin: '../../bower_components/microplugin/src/microplugin',
        'normalize-css': '../../bower_components/normalize-css/normalize.css',
        requirejs: '../../bower_components/requirejs/require',
        'require-css': '../../bower_components/require-css/css',
        'jquery.finger': '../../bower_components/jquery.finger/dist/jquery.finger',
        mathsass: '../../bower_components/mathsass/dist/math.scss',
        scut: '../../bower_components/scut/dist/_scut.scss',
        async: '../../bower_components/requirejs-plugins/src/async',
        depend: '../../bower_components/requirejs-plugins/src/depend',
        font: '../../bower_components/requirejs-plugins/src/font',
        image: '../../bower_components/requirejs-plugins/src/image',
        json: '../../bower_components/requirejs-plugins/src/json',
        text: '../../bower_components/requirejs-plugins/lib/text',
        goog: '../../bower_components/requirejs-plugins/src/goog',
        mdown: '../../bower_components/requirejs-plugins/src/mdown',
        noext: '../../bower_components/requirejs-plugins/src/noext',
        propertyParser: '../../bower_components/requirejs-plugins/src/propertyParser',
        'Markdown.Converter': '../../bower_components/requirejs-plugins/lib/Markdown.Converter'
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
        orbit: {
            deps: [
                'foundation'
            ]
        },
        offcanvas: {
            deps: [
                'foundation'
            ]
        }
    }
}, ['start']);
