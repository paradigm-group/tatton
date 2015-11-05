module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // Copy web assets from bower_components to more convenient directories.
        copy: {
            main: {
                files: [
                    // Stylesheets
                    {
                        expand: true,
                        cwd: 'bower_components/bootstrap-sass/assets/stylesheets/',
                        src: ['**/*.scss'],
                        dest: 'sass/'
                    }
                ]
            },
        },

        concat: {
            dist: {
                src: [
                    'bower_components/bootstrap-sass/assets/javascripts/bootstrap/collapse.js',
                    'js/scripts.js',
                ],
                dest: '../application/tim-assets/themes/<%= pkg.name %>/assets/js/<%= pkg.name %>.js',
            }
        },

        uglify: {
            build: {
                src: '../application/tim-assets/themes/<%= pkg.name %>/assets/js/<%= pkg.name %>.js',
                dest: '../application/tim-assets/themes/<%= pkg.name %>/assets/js/<%= pkg.name %>.min.js'
            }
        },

        // Compile SASS files into minified CSS.
        sass: {
            dist: {
                options: {
                    outputStyle: 'compressed'
                },
                files: {
                    '../application/tim-assets/themes/<%= pkg.name %>/assets/css/<%= pkg.name %>.css': 'sass/app.scss'
                }
            }
        },

        // Watch these files and notify of changes.
        watch: {
            grunt: { files: ['Gruntfile.js'] },
            scripts: {
                files: [
                    'js/scripts.js'
                ],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                },
            },
            sass: {
                files: [
                    'sass/**/*.scss'
                ],
                tasks: ['sass']
            }
        }
    });

    // Load externally defined tasks. 
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // Establish tasks we can run from the terminal.
    grunt.registerTask('default', ['concat', 'uglify', 'sass', 'watch', 'copy']);
};