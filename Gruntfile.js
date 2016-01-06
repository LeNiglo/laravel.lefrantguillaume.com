module.exports = function (grunt) {

    grunt.initConfig({

        concat: {
            options: {
                separator: ';',
            },
            js_frontend: {
                src: [
                    './bower_components/AdminLTE/plugins/jQuery/jquery-2.1.4.min.js',
                    './bower_components/bootstrap/dist/js/bootstrap.js',
                    './resources/assets/javascript/frontend.js'
                ],
                dest: './public/assets/javascript/frontend.js',
            },
            js_backend: {
                src: [
                    './bower_components/AdminLTE/plugins/jQuery/jquery-2.1.4.min.js',
                    './bower_components/AdminLTE/bootstrap/js/bootstrap.js',
                    './bower_components/AdminLTE/dist/js/app.js',
                    './resources/assets/javascript/select2.min.js',
                    './resources/assets/javascript/backend.js'
                ],
                dest: './public/assets/javascript/backend.js',
            },
        },

        less: {
            development: {
                options: {
                    compress: true,
                },
                files: {
                    "./public/assets/stylesheets/frontend.css": "./resources/assets/stylesheets/frontend.less",
                    "./public/assets/stylesheets/backend.css": "./resources/assets/stylesheets/backend.less"
                }
            }
        },
        uglify: {
            options: {
                mangle: false
            },
            frontend: {
                files: {
                    './public/assets/javascript/frontend.js': './public/assets/javascript/frontend.js',
                }
            },
            backend: {
                files: {
                    './public/assets/javascript/backend.js': './public/assets/javascript/backend.js',
                }
            },
        },
        phpunit: {
            classes: {
                dir: 'tests/'
            },
            options: {
                bin: 'vendor/bin/phpunit',
                colors: true
            }
        },
        watch: {
            views: {
                files: [
                    './Gruntfile.js',
                    './app/*.php',
                    './app/Http/*.php',
                    './app/Http/*/*.php',
                    './resources/views/*.blade.php',
                    './resources/views/*/*.blade.php',
                ],
                tasks: [],
                options: {
                    livereload: true
                }
            },
            js_frontend: {
                files: [
                    './bower_components/jquery/jquery.js',
                    './bower_components/bootstrap/dist/js/bootstrap.js',
                    './resources/assets/javascript/frontend.js'
                ],
                tasks: ['concat:js_frontend', 'uglify:frontend'],
                options: {
                    livereload: true
                }
            },
            js_backend: {
                files: [
                    './bower_components/jquery/jquery.js',
                    './bower_components/bootstrap/dist/js/bootstrap.js',
                    './resources/assets/javascript/backend.js'
                ],
                tasks: ['concat:js_backend', 'uglify:backend'],
                options: {
                    livereload: true
                }
            },
            less: {
                files: ['./resources/assets/stylesheets/*.less'],
                tasks: ['less'],
                options: {
                    livereload: true
                }
            },
            tests: {
                files: ['app/Http/Controllers/*.php', 'app/Http/Middleware/*.php', 'app/*.php'],
                tasks: ['phpunit']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-phpunit');

    grunt.registerTask('default', ['watch']);

};


