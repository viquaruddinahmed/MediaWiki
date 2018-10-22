<?php
/**
 * Copyright © 2018 by the authors listed below.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @license GPL 2+
 * @file
 *
 * @author Sam Wilson
 */

namespace MediaWiki\Extension\Examples\DataPages;

class Hooks {

	/**
	 * Called directly after MediaWiki has processed extension.json
	 * @link https://www.mediawiki.org/wiki/Manual:Extension.json/Schema#callback
	 */
	public static function registrationCallback() {
		define( 'CONTENT_MODEL_XML_DATA', 'XML Data' );
	}
}
