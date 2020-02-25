/**
 * sass
 * ======
 *
 * Compile scss to css
 *
 * Link: https://github.com/gruntjs/grunt-contrib-sass
 */

'use strict';

module.exports = function (grunt) {
  return {
    dist: {
      files: [{
        expand: true,
        cwd: '<%= pkg.Config.src %>/scss',
        src: ['*.scss'],
        dest: '<%= pkg.Config.src %>/css',
        ext: '.css'
      }]
    }
  };
};
