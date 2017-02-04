<?php

/**
 * @package Lightbox Images Gallery Display
 * @author Gary Hollands 2009 - http://www.solriche.co.uk/
 * Partly plagiarised from SimpleView Gallery Deluxe v2.1 - http://www.chromasynthetic.com/
 * @version 1.0
 * @copyright GNU General Public License, http://www.gnu.org/licenses/gpl.html
 * @tutorial This function searches a directory for files with specified image extensions and outputs them as HTML links.
 * Thumbnail files can also detected and excluded from listing.
*/
	function lightbox_display($dir_to_search, $rel){
		$image_dir = $dir_to_search;
		$dir_to_search = scandir($dir_to_search);
		$image_exts = array('gif', 'jpg', 'jpeg', 'png');
		$excluded_filename = '_t';
			foreach ($dir_to_search as $image_file){
			$dot = strrpos($image_file, '.');
			$filename = substr($image_file, 0, $dot);
			$filetype = substr($image_file, $dot+1);
			$thumbnail_file = strrpos($filename, $excluded_filename);
				if ((!$thumbnail_file) and array_search($filetype, $image_exts) !== false){
echo "<a href='".$image_dir.$image_file."'data-lightbox='primo' rel='".$rel."'>
<img src='".$image_dir.$filename."_t.".$filetype."' alt='".$filename."' width='100' height='80' title=''/>
</a>"."\n";
				}
			}
	}


?>
