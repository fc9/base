/**
 * copy
 * ====
 *
 * Copies remaining files to places other tasks can use.
 *
 * Link: https://github.com/gruntjs/grunt-contrib-copy
 */

'use strict';

module.exports = function (grunt) {
  return {
    dist: {
      files: [
        {
          dest: '<%= pkg.Config.dist %>/',
          src: 'LICENSE'
        },
        {
          cwd: '<%= pkg.Config.src %>',
          expand: true,
          flatten: true,
          filter: 'isFile',
          dest: '<%= pkg.Config.dist %>/',
          src: 'css/**',
        }
      ]
    }
  };
};
