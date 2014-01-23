module.exports = (grunt) ->

    ###
     Main Grunt configuration object
    ###
    grunt.initConfig
        pkg: grunt.file.readJSON 'package.json'

        # Commonly used file paths
        paths:
            public: 'content'
            images: '<%= paths.public %>/img'
            scripts: '<%= paths.public %>/scripts'
            js: '<%= paths.scripts %>/js'
            coffee: '<%= paths.scripts %>/coffee'
            styles: '<%= paths.public %>/styles'
            sass: '<%= paths.styles %>/scss'

        # Name keys used for different important files and folders
        dist_key: 'dist'
        main_key: 'main'

        # Generated 'banner' text on top of compiled distribution files
        banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> -
            <%= grunt.template.today("yyyy-mm-dd") %>\n
            <%= pkg.homepage ? "* " + pkg.homepage + "\n" : "" %>
            * Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;
             Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */\n'

        # Bower-RequireJS hook
        bower:
            target:
                rjsConfig: '<%= paths.js %>/config.js'
                options:
                    baseUrl: '<%= paths.js %>'

        # Compiling Sass files
        sass:
            dev:
                options:
                    quiet: true
                    style: 'expanded'
                files:
                    '<%= paths.styles %>/<%= main_key %>.css': '<%= paths.sass %>/<%= main_key %>.scss'
            dist:
                options:
                    style: 'compressed'
                files:
                    '<%= dist_key %>/<%= paths.styles %>/<%= main_key %>.min.css': '<%= paths.sass %>/<%= main_key %>.scss'

        # Compiling CoffeeScript files
        coffee:
            compile:
                expand: true
                cwd: '<%= paths.coffee %>'
                src: ['**/*.coffee']
                dest: '<%= paths.js %>'
                ext: '.js'

        # Compile on-demand with `grunt watch`
        watch:
            sass:
                files: ['<%= paths.sass %>/**/*.scss']
                tasks: ['sass:dev']
            coffee:
                files: ['<%= paths.coffee %>/**/*.coffee']
                tasks: ['coffee:compile']

        ###
         Deployment tasks
        ###

        # Copy folders as-is to production build
        copy:
            dist:
                files: [
                    # Laravel app folder
                    expand: true
                    src: ['app/**', 'bootstrap/**', '!app/storage/sessions/*']
                    dest: '<%= dist_key %>/'
                  ,
                    # Copy content with empty folders, then copy bower components (after --production build)
                    src: ['content/**']
                    dot: true
                    dest: '<%= dist_key %>/'
                ]

        # Clean as much junk as we can for production build
        clean:
            laravel:
                expand: true
                cwd: '<%= dist_key %>/'
                src: [
                    '.gitkeep'
                    '.gitignore'
                    'app/tests'
                    'app/commands'
                    'app/config/dev'
                    'app/config/staging'
                    'app/config/testing'
                    'app/config/compile.php'
                    'app/config/workbench.php'
                    '<%= dist_key %>/app/storage/*/*'
                ]

            assets:
                expand: true
                cwd: '<%= dist_key %>/'
                src: [
                    'content/<%= paths.styles %>/*'
                    'content/<%= paths.scripts %>/*'
                    '!content/<%= paths.scripts %>/vendor'
                    'content/<%= paths.images %>/*'
                    'content/bower_components'
                ]

        # Image optimization
        imagemin:
            dist:
                files: [
                    expand: true
                    cwd: '<%= paths.images %>/'
                    src: ['**/*.{png,jpg,jpeg,gif}']
                    dest: '<%= dist_key %>/<%= paths.images %>/'
                ]

        # Shell commands
        shell:
            optimize:
                command: 'php artisan optimize'
            permissions:
                command: 'chmod -R 777 app/storage'

        # RequireJS Optimizer
        requirejs:
            dist:
                options:
                    name: 'start'
                    mainConfigFile: '<%= paths.js %>/config.js'
                    baseUrl: '<%= paths.js %>'
                    out: '<%= dist_key %>/<%= paths.scripts %>/main.min.js'

                    include: ['requirejs']

                    paths:
                        requirejs: '../../bower_components/requirejs/require'
                        jquery: 'empty:'
                        facebook: 'empty:'
                        twitter: 'empty:'
                        gplusone: 'empty:'

    ###
     Register tasks
    ###

    grunt.registerTask 'default', ['init']

    grunt.registerTask 'init', ['bower', 'sass:dev', 'coffee']

    grunt.registerTask 'optimize-assets', [
        'clean:assets'
        'sass:dist'
        'coffee:compile'
        'requirejs'
        'imagemin'
    ]

    grunt.registerTask 'build', [
        'shell:optimize'
        'mkdir:dist'
        'copy:dist'
        'clean:laravel'
        'shell:permissions'
        'optimize-assets'
    ]

    # Helper tasks
    grunt.registerTask 'sass', ['sass:dev']

    grunt.registerTask 'mkdir:dist', ->
        grunt.file.mkdir('dist')

    grunt.registerTask 'mkdir:assets', ->
        grunt.file.mkdir('dist/content')

    ###
     Load Grunt plugins to use
    ###
    grunt.loadNpmTasks 'grunt-contrib-sass'
    grunt.loadNpmTasks 'grunt-contrib-coffee'
    grunt.loadNpmTasks 'grunt-contrib-requirejs'
    grunt.loadNpmTasks 'grunt-contrib-jshint'
    grunt.loadNpmTasks 'grunt-contrib-watch'
    grunt.loadNpmTasks 'grunt-contrib-clean'
    grunt.loadNpmTasks 'grunt-contrib-copy'
    grunt.loadNpmTasks 'grunt-contrib-imagemin'
    grunt.loadNpmTasks 'grunt-bower-requirejs'
    grunt.loadNpmTasks 'grunt-shell'
