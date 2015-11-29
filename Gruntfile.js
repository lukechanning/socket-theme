module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
                options: {
                    outputStyle: 'compressed',
                    sourceMap: true,
                },
                files: {
                    'app.css': 'assets/scss/global.scss',
                }
            }
        },

        watch: {
            grunt: {
                options: {
                    reload: true
                },
                files: ['Gruntfile.js']
            },

            sass: {
                files: 'assets/scss/**/*.scss',
                tasks: ['sass']
            }
        },

        uglify: {
            options: {
                mangle: false
            },
            my_target: {
                files: {
                    'js/custom.min.js': ['assets/js/custom.js'],
                }
            }
        },

/*        copy: {
            main: {
                nonull: true,
                files : [
                    {src: 'bower_components/foundation/js/foundation.min.js', dest: 'js/foundation.min.js'},
                    {src: 'bower_components/owl.carousel/dist/assets/owl.carousel.min.css', dest: 'css/owl.carousel.min.css'},
                    {src: 'bower_components/owl.carousel/dist/assets/owl.theme.default.min.css', dest: 'css/owl.default.min.css'},
                ]
            }
        }*/

    });
    
    //Load
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    //grunt.loadNpmTasks('grunt-contrib-copy');

    //Register
    grunt.registerTask('style', ['sass']);
    grunt.registerTask('build', ['style', 'uglify']);
    grunt.registerTask('default', ['style', 'uglify']);
}