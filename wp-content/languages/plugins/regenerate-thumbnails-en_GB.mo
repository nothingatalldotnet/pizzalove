��    J      l  e   �      P     Q  0   Z     �  \   �  A     Y   J  J   �     �     	     !  �  .     �	  �   �	     U
     r
     �
  \  �
  
   �  "         #  d   )     �     �  )   �  ;   �  .     5   A  D   w  +   �  p   �  /   Y     �     �     �     �  ?   �  -     $   2  K   W  �   �  7   �  �   �  G   T  @   �  R   �  C   0  p   t  Q   �     7  h   W  6   �  �   �     �    �  �   �  0   x  J   �  1   �  9  &  <   `  M   �  O   �  /   ;  ,   k  &   �  +   �     �     �  :     /   H     x     �     �  /  �     �  0   �       \   0  A   �  Y   �  J   )     t     �     �  �  �     >  �   L     �     �     
   \     
   z!  "   �!     �!  d   �!     "     "  )   1"  ;   ["  .   �"  5   �"  D   �"  +   A#  p   m#  /   �#     $     !$     1$     B$  ?   I$  -   �$  $   �$  K   �$  �   (%  7   &  �   N&  G   �&  @   !'  R   b'  C   �'  p   �'  Q   j(     �(  h   �(  6   E)  �   |)     Q*    a*  �   z+  0   �+  J   .,  1   y,  7  �,  <   �-  M    .  O   n.     �.     �.     �.      /     /     %/  :   8/  /   s/     �/     �/     �/     D         ?      #   %      /           '   F   +                              9   J   1          8   
           (   >   *   	             5           =   C         ,      -                            2       &   0      6   E   G   I   ;                3   B   $       :   <      !      H      7   "                   4              .       A   @                     )    %s (old) <code>{filename}</code> {width}×{height} pixels <strong>ERROR:</strong> {error} <strong>{label}:</strong> {width}×{height} pixels (thumbnail would be larger than original) <strong>{label}:</strong> {width}×{height} pixels ({cropMethod}) <strong>{label}:</strong> {width}×{height} pixels ({cropMethod}) <code>{filename}</code> <strong>{label}:</strong> {width}×{height} pixels <code>{filename}</code> Alex Mills (Viper007Bond) All done in {duration}. Alternatives Another alternative is to use the <a href="{url-photon}">Photon</a> functionality that comes with the <a href="{url-jetpack}">Jetpack</a> plugin. It generates thumbnails on-demand using WordPress.com's infrastructure. <em>Disclaimer: The author of this plugin, Regenerate Thumbnails, is an employee of the company behind WordPress.com and Jetpack but I would recommend it even if I wasn't.</em> Attachment %d Delete thumbnail files for old unregistered sizes in order to free up server space. This may result in broken images in your posts and pages. Done! Click here to go back. Error Regenerating Errors Encountered If you have <a href="{url-cli}">command-line</a> access to your site's server, consider using <a href="{url-wpcli}">WP-CLI</a> instead of this tool. It has a built-in <a href="{url-wpcli-regenerate}">regenerate command</a> that works similarly to this tool but should be significantly faster since it has the advantage of being a command-line tool. Loading… No attachment exists with that ID. Pause Posts to process per loop. This is to control memory usage and you likely don't need to adjust this. Preview Regenerate Thumbnails Regenerate Thumbnails For All Attachments Regenerate Thumbnails For All {attachmentCount} Attachments Regenerate Thumbnails For Featured Images Only Regenerate Thumbnails For The %d Selected Attachments Regenerate Thumbnails For The {attachmentCount} Featured Images Only Regenerate Thumbnails: {name} — WordPress Regenerate the thumbnails for one or more of your image uploads. Useful when changing their sizes or your theme. Regenerate the thumbnails for this single image Regenerated {name} Regenerating… Regeneration Log Resume Skip regenerating existing correctly sized thumbnails (faster). Skipped Attachment ID {id} ({name}): {reason} Skipped Attachment ID {id}: {reason} Specific post IDs to update rather than any posts that use this attachment. The attachment says it also has these thumbnail sizes but they are no longer in use by WordPress. You can probably safely have this plugin delete them, especially if you have this plugin update any posts that make use of this attachment. The current image editor cannot process this file type. The fullsize image file cannot be found in your uploads directory at <code>%s</code>. Without it, new thumbnail images can't be generated. The page number requested is larger than the number of pages available. The types of posts to update. Defaults to all public post types. There was an error regenerating this attachment. The error was: <em>{message}</em> These are all of the thumbnail sizes that are currently registered: These are the currently registered thumbnail sizes, whether they exist for this attachment, and their filenames: This attachment is a site icon and therefore the thumbnails shouldn't be touched. This item is not an attachment. This plugin requires WordPress 4.7 or newer. You are on version %1$s. Please <a href="%2$s">upgrade</a>. This tool requires that JavaScript be enabled to work. This tool won't be able to do anything because your server doesn't support image editing which means that WordPress can't create thumbnail images. Please ask your host to install the Imagick or GD PHP extensions. Thumbnail Sizes To process a specific image, visit your media library and click the &quot;Regenerate Thumbnails&quot; link or button. To process multiple specific images, make sure you're in the <a href="%s">list view</a> and then use the Bulk Actions dropdown after selecting one or more images. Unable to fetch a list of attachment IDs to process from the WordPress REST API. You can check your browser's console for details. Unable to load the metadata for this attachment. Update the content of posts that use this attachment to use the new sizes. Update the content of posts to use the new sizes. When you change WordPress themes or change the sizes of your thumbnails at <a href="%s">Settings → Media</a>, images that you have previously uploaded to you media library will be missing thumbnail files for those new image sizes. This tool will allow you to create those missing thumbnail files for all images. Whether to delete any old, now unregistered thumbnail files. Whether to only regenerate missing thumbnails. It's faster with this enabled. Whether to update the image tags in any posts that make use of this attachment. action for a single imageRegenerate Thumbnails admin menu entry titleRegenerate Thumbnails admin page titleRegenerate Thumbnails bulk actions dropdownRegenerate Thumbnails cropped to fit https://alex.blog/ https://alex.blog/wordpress-plugins/regenerate-thumbnails/ proportionally resized to fit inside dimensions {count} hours {count} minutes {count} seconds PO-Revision-Date: 2019-05-10 15:36:24+0000
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
Plural-Forms: nplurals=2; plural=n != 1;
X-Generator: GlotPress/2.4.0-alpha
Language: en_GB
Project-Id-Version: Plugins - Regenerate Thumbnails - Stable (latest release)
 %s (old) <code>{filename}</code> {width}×{height} pixels <strong>ERROR:</strong> {error} <strong>{label}:</strong> {width}×{height} pixels (thumbnail would be larger than original) <strong>{label}:</strong> {width}×{height} pixels ({cropMethod}) <strong>{label}:</strong> {width}×{height} pixels ({cropMethod}) <code>{filename}</code> <strong>{label}:</strong> {width}×{height} pixels <code>{filename}</code> Alex Mills (Viper007Bond) All done in {duration}. Alternatives Another alternative is to use the <a href="{url-photon}">Photon</a> functionality that comes with the <a href="{url-jetpack}">Jetpack</a> plugin. It generates thumbnails on-demand using WordPress.com's infrastructure. <em>Disclaimer: The author of this plugin, Regenerate Thumbnails, is an employee of the company behind WordPress.com and Jetpack but I would recommend it even if I wasn't.</em> Attachment %d Delete thumbnail files for old unregistered sizes in order to free up server space. This may result in broken images in your posts and pages. Done! Click here to go back. Error Regenerating Errors Encountered If you have <a href="{url-cli}">command-line</a> access to your site's server, consider using <a href="{url-wpcli}">WP-CLI</a> instead of this tool. It has a built-in <a href="{url-wpcli-regenerate}">regenerate command</a> that works similarly to this tool but should be significantly faster since it has the advantage of being a command-line tool. Loading… No attachment exists with that ID. Pause Posts to process per loop. This is to control memory usage and you likely don't need to adjust this. Preview Regenerate Thumbnails Regenerate Thumbnails For All Attachments Regenerate Thumbnails For All {attachmentCount} Attachments Regenerate Thumbnails For Featured Images Only Regenerate Thumbnails For The %d Selected Attachments Regenerate Thumbnails For The {attachmentCount} Featured Images Only Regenerate Thumbnails: {name} — WordPress Regenerate the thumbnails for one or more of your image uploads. Useful when changing their sizes or your theme. Regenerate the thumbnails for this single image Regenerated {name} Regenerating… Regeneration Log Resume Skip regenerating existing correctly sized thumbnails (faster). Skipped Attachment ID {id} ({name}): {reason} Skipped Attachment ID {id}: {reason} Specific post IDs to update rather than any posts that use this attachment. The attachment says it also has these thumbnail sizes but they are no longer in use by WordPress. You can probably safely have this plugin delete them, especially if you have this plugin update any posts that make use of this attachment. The current image editor cannot process this file type. The fullsize image file cannot be found in your uploads directory at <code>%s</code>. Without it, new thumbnail images can't be generated. The page number requested is larger than the number of pages available. The types of posts to update. Defaults to all public post types. There was an error regenerating this attachment. The error was: <em>{message}</em> These are all of the thumbnail sizes that are currently registered: These are the currently registered thumbnail sizes, whether they exist for this attachment, and their filenames: This attachment is a site icon and therefore the thumbnails shouldn't be touched. This item is not an attachment. This plugin requires WordPress 4.7 or newer. You are on version %1$s. Please <a href="%2$s">upgrade</a>. This tool requires that JavaScript is enabled to work. This tool won't be able to do anything because your server doesn't support image editing which means that WordPress can't create thumbnail images. Please ask your host to install the Imagick or GD PHP extensions. Thumbnail Sizes To process a specific image, visit your media library and click the &quot;Regenerate Thumbnails&quot; link or button. To process multiple specific images, make sure you're in the <a href="%s">list view</a> and then use the Bulk Actions dropdown after selecting one or more images. Unable to fetch a list of attachment IDs to process from the WordPress REST API. You can check your browser's console for details. Unable to load the metadata for this attachment. Update the content of posts that use this attachment to use the new sizes. Update the content of posts to use the new sizes. When you change WordPress themes or change the sizes of your thumbnails at <a href="%s">Settings 	 Media</a>, images that you have previously uploaded to you media library will be missing thumbnail files for those new image sizes. This tool will allow you to create those missing thumbnail files for all images. Whether to delete any old, now unregistered thumbnail files. Whether to only regenerate missing thumbnails. It's faster with this enabled. Whether to update the image tags in any posts that make use of this attachment. Regenerate Thumbnails Regenerate Thumbnails Regenerate Thumbnails Regenerate Thumbnails cropped to fit https://alex.blog/ https://alex.blog/wordpress-plugins/regenerate-thumbnails/ proportionally resized to fit inside dimensions {count} hours {count} minutes {count} seconds 