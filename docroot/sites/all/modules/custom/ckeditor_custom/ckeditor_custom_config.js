/*
  Custom configuration for ckeditor.

  Configuration options can be set here. Any settings described here will be
  overridden by settings defined in the $settings variable of the hook. To
  override those settings, do it directly in the hook itself to $settings.

  More info at http://fuseinteractive.ca/blog/wysiwyg-module-ckeditor-taming-beast
  More info on webkit-span-fix at https://github.com/RomanMinkin/webkit-span-fix
*/
CKEDITOR.editorConfig = function( config )
{
  config.extraPlugins = 'webkit-span-fix';
}
