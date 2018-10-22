<?php
/**
 * HelloWorld SpecialPage for Example extension
 *
 * @file
 * @ingroup Extensions
 */

class SpecialHelloWorld extends SpecialPage {

	/**
	 * Initialize the special page.
	 */
	public function __construct() {
		// A special page should at least have a name.
		// We do this by calling the parent class (the SpecialPage class)
		// constructor method with the name as first and only parameter.
		parent::__construct( 'HelloWorld' );
	}

	/**
	 * Shows the page to the user.
	 * @param string $sub The subpage string argument (if any).
	 *  [[Special:HelloWorld/subpage]].
	 */
	public function execute( $sub ) {
		global $wgRequest;

		$out = $this->getOutput();

		$out->setPageTitle( $this->msg( 'example-helloworld' ) );

		// Parses message from .i18n.php as wikitext and adds it to the
		// page output.
		//$out->addWikimsg( 'example-hello_world', $this->getRandomName() );
		$out->addWikimsg( 'example-hello_world', $wgRequest->getText( 'name', $this->getRandomName() ) );
	}

	public function getRandomName() {
        	$ar = ['John', 'Mary', 'James', 'William'];
		return $ar[array_rand($ar)];
	}

	protected function getGroupName() {
		return 'other';
	}
}
