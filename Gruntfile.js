module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
            },
            build: {
                src: 'src/js/*.js',
                dest: 'dist/js/scripts.min.js'
            }
        },
        imagemin: {
            png: {
                options: {
                    optimizationLevel: 7
                },
                files: [
                    {
                        // Set to true to enable the following options…
                        expand: true,
                        // cwd is 'current working directory'
                        cwd: 'src/img',
                        src: ['**/*.png'],
                        // Could also match cwd line above. i.e. project-directory/img/
                        dest: 'dist/img/compressed/',
                        ext: '.png'
                    }
                ]
            }
        },
        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    'src/css/style.css' : 'src/css/less/style.less' // destination file and source file
                }
            }
        },
        cssmin: {
            minify: {
                src: 'src/css/*.css',
                dest: 'dist/css/style.min.css'
            }
        },
        watch: {
            uglify: {
                files: 'src/js/scripts.js',
                tasks: ['uglify']
            },
            styles: {
                files: ['src/css/less/*.less', 'src/css/style.css'], // which files to watch
                tasks: ['less', 'cssmin'],
                options: {
                    nospawn: true
                }
            }
        }
    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // Load the plugin that provides the "less" task.
    grunt.loadNpmTasks('grunt-contrib-less');

    // Load the plugin that provides the "cssmin" task.
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // load imagemin plugin
    grunt.loadNpmTasks('grunt-contrib-imagemin');

    // Load the plugin that provides the "watch" task.
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Uglify task
    grunt.registerTask('scripts', ['uglify']);
    // Less task
    grunt.registerTask('styles', ['less', 'cssmin']);
    // register imagemin task
    grunt.registerTask('imagepng', ['imagemin:png']);
    // Default task(s).
    grunt.registerTask('default', ['uglify', 'less', 'cssmin', 'imagemin:png', 'watch']);

};
