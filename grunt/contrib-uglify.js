module.exports = function(grunt) {

	grunt.config('uglify', {
		options: {
			compress: {
				drop_console: true
			}
		},
		my_target: {
			files: {
				'<%= dirs.dest %><%= dirs.js_build_folder %>main.js': ['<%= dirs.dest %><%= dirs.js_build_folder %>main.js'],
				'craft/templates/_partials/snippets/loadcss.js': ['craft/templates/_partials/snippets/loadcss.js'],
				'craft/templates/_partials/snippets/fontfaceobserver.js': ['bower_components/fontfaceobserver/fontfaceobserver.js']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-uglify');

};
