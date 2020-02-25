/**
 * clean
 * =====
 *
 * Remove temporary and unused files.
 *
 * Link: https://github.com/gruntjs/grunt-contrib-clean
 */

'use strict';

module.exports = function (grunt) {
  return {
    tmp: '<%= pkg.Config.tmp %>',
    dist: '<%= pkg.Config.dist %>'
  };
};
