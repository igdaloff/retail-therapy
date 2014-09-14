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
        files: "_js/app.js",
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
          "_js/lib/modernizr/modernizr.js",
          "_js/lib/jquery/jquery.js"
          ],
        dest: "js/vendors.js"
      },
      app: {
        src: "_js/app.js",
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