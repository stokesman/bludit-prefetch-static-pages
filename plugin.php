<?php

class pluginPrefetchStaticPages extends Plugin {

	// Hook for head of document 
	public function siteHead()
	{
		global $page;
		global $site;
		global $staticContent;
		global $WHERE_AM_I;

		$theURL = $page->permalink();

		// Prolly overkill. Build static pages array if $staticContent is empty
		$pages = empty( $staticContent ) ? buildStaticPages() : $staticContent;

		// make a link for root/home if not the current page
		$html = $WHERE_AM_I !== 'home' ? self::makeLink( DOMAIN ) : '';
		// generate html links for static pages
		foreach ( $pages as $resource ){
			$permalink = $resource->permalink();
			// skip if current page
			if ( $permalink === $theURL ) continue;
			$html .= self::makeLink( $permalink );
		}
		return $html;
	}

	private static function makeLink( $url )
	{
		return '<link rel="prefetch" as="document" href="' . $url . '">'.PHP_EOL;
	}
}