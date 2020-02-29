/**
 * uglify
 * ======
 *
 * Minify the library.
 *
 * Link: https://github.com/gruntjs/grunt-contrib-uglify
 */

'use strict';

module.exports = function (grunt) {
  return {
    dist: {
      options: {
        banner: '<%= pkg.Config.banner %>',
        sourceMap: true,
        sourceMapIncludeSources: true
      },
      files: {
        '<%= pkg.config.dist %>/<%= pkg.config.src_name %>.min.js': ['<%= pkg.Config.dist %>/<%= pkg.Config.src_name %>.js']
      }
    }
  };
};
