<?php
namespace MultiMaps;

/**
 * Marker class for collection of map elements
 *
 * @file Marker.php
 * @ingroup MultiMaps
 * @author Pavel Astakhov <pastakhov@yandex.ru>
 * @licence GNU General Public Licence 2.0 or later
 * @property string $icon The icon marker
 */
class Marker extends BaseMapElement {

	function __construct() {
		parent::__construct();

		$this->availableProperties = array_merge(
				$this->availableProperties,
				array( 'icon' )
				);
	}

	/**
	 * Returns element name
	 * return string Element name
	 */
	public function getElementName() {
		return 'Marker'; //TODO i18n?
	}

	public function setProperty($name, $value) {
		if( strtolower($name) == 'icon' ) {
			$title = \Title::newFromText( $value, NS_FILE );
			if ( !is_null( $title ) && $title->exists() ) {
				$imagePage = new \ImagePage( $title );
				$value = $imagePage->getDisplayedFile()->getURL();
			} else {
				$this->errormessages[] = \wfMessage( 'multimaps-marker-incorrect-icon', $value )->escaped();
				return false;
			}
		}
		return parent::setProperty($name, $value);
	}

}
