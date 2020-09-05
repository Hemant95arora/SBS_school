module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: {
          'assets/src/css/main.css': 'assets/src/scss/main.scss'
        }
      }
    },

    // cssmin: {
    //   dist: {
    //     files: {
    //       'assets/build/css/style.min.css': 'assets/build/css/style.css'
    //     }
    //   }
    // },

    // watch: {
    //   sass: {
    //     files: ['sass/**/*.scss'],
    //     tasks: ['sass']
    //   },
    //   styles: {
    //     files: ['stylesheets/style.css'],
    //     tasks: ['cssmin']
    //   }
    // }
    // compass: {
    //   main: {
    //       options: {
    //           sassDir: './assets/src/scss/elements',
    //           cssDir: './assets/build/css/',
    //           environment: 'production',
    //           outputStyle: 'compact',
    //           sourcemap: true
    //       }
    //   },
    // },
  });
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['sass']);
};