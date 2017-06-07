module.exports = function(grunt) {

	// Project configuration
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json')
	});

	// Load per-task config from separate files.
	grunt.loadTasks('grunt');

};
