module.exports = function(grunt){

  grunt.initConfig({
    pkg: grunt.file.readJSON("package.json"),
    watch: {
      compass: {
        files: "scss/**/*.scss",
        tasks: "compass:dist",
        options: {
          interrupt: true
        }
      },
      concat_app: {
        files: "js/**/*",
        tasks: "concat:app"
      }
    },
    compass: {
      dist: {
        options: {
          sassDir: 'scss/',
          cssDir: 'css/',
          imagesDir: 'img/'
        }
      }
    },
    concat: {
      vendor: {
        src: [
          "js/lib/modernizr/modernizr.js",
          "js/lib/jquery/dist/jquery.js"
          ],
        dest: "js/vendors.js"
      },
      app: {
        src: "js/**/*.js",
        dest: "js/app.js"
      }
    }
  });

  grunt.loadNpmTasks("grunt-contrib-watch");
  grunt.loadNpmTasks("grunt-contrib-sass");
  grunt.loadNpmTasks("grunt-contrib-compass");
  grunt.loadNpmTasks("grunt-contrib-concat");

  grunt.registerTask("build", ["concat:vendor", "concat:app", "compass:dist"]);
}