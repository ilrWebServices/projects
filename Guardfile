# More info at https://github.com/guard/guard#readme

guard 'sass',
  :input => 'docroot/sites/all/themes/hoc_theme/scss',
  :output => 'docroot/sites/all/themes/hoc_theme/css',
  :compass => {fonts_dir: 'sites/all/themes/hoc_theme/fonts'},
  :style => :compressed

guard 'livereload', :port => '35777' do
  watch(%r{.+\.(css|js)$})
  callback(:start_begin) { `touch docroot/.drupal_streamline_guard_running` }
  callback(:stop_end) { `rm docroot/.drupal_streamline_guard_running` }
end
