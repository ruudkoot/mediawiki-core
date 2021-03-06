<?php
/**
 * JSON Schema Content Handler
 *
 * @file
 *
 * @author Ori Livneh <ori@wikimedia.org>
 * @author Kunal Mehta <legoktm@gmail.com>
 */

/**
 * @since 1.24
 */
class JSONContentHandler extends TextContentHandler {

	/**
	 * The class name of objects that should be created
	 *
	 * @deprecated override getContentClass instead
	 *
	 * @var string
	 */
	protected $contentClass = 'JSONContent';

	public function __construct( $modelId = CONTENT_MODEL_JSON ) {
		parent::__construct( $modelId, array( CONTENT_FORMAT_JSON ) );
	}

	/**
	 * Temporary back-compat until extensions
	 * are updated to override this
	 *
	 * @return string
	 */
	protected function getContentClass() {
		return $this->contentClass;
	}

	/**
	 * Returns the english language, because JSON is english, and should be handled as such.
	 *
	 * @param Title $title
	 * @param Content|null $content
	 *
	 * @return Language Return of wfGetLangObj( 'en' )
	 *
	 * @see ContentHandler::getPageLanguage()
	 */
	public function getPageLanguage( Title $title, Content $content = null ) {
		return wfGetLangObj( 'en' );
	}

	/**
	 * Returns the english language, because JSON is english, and should be handled as such.
	 *
	 * @param Title $title
	 * @param Content|null $content
	 *
	 * @return Language Return of wfGetLangObj( 'en' )
	 *
	 * @see ContentHandler::getPageLanguage()
	 */
	public function getPageViewLanguage( Title $title, Content $content = null ) {
		return wfGetLangObj( 'en' );
	}
}
