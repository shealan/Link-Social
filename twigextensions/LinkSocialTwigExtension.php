<?php
/**
 * Link Social plugin for Craft CMS
 *
 * Link Social Twig Extension
 *
 * --snip--
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators, global variables, and
 * functions. You can even extend the parser itself with node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 * --snip--
 *
 * @author    Shealan Forshaw
 * @copyright Copyright (c) 2016 Shealan Forshaw
 * @link      http://shealanforshaw.com
 * @package   LinkSocial
 * @since     1
 */

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class LinkSocialTwigExtension extends \Twig_Extension
{
	/**
	 * Returns the name of the extension.
	 *
	 * @return string The extension name
	 */
	public function getName()
	{
		return 'LinkSocial';
	}

	/**
	 * Returns an array of Twig filters, used in Twig templates via:
	 *
	 *      {{ 'something' | linkSocial('service') }}
	 *
	 * @return array
	 */
	public function getFilters()
	{
		return array(
			'linkSocial' => new \Twig_Filter_Method($this, 'linkSocial', array('is_safe' => array('html'))),
		);
	}

	/**
	 * Our function called via Twig; it can do anything you want
	 *
	 * @return string
	 */
	public function linkSocial($text = null, $network = null)
	{
		if ($text && $network) {

			/* first lets strip any tags out */
			$text = strip_tags($text);

			switch ($network) {

				case 'twitter':

					/* first let's link usernames */
					$text = preg_replace('/(^|\s)@([a-z0-9_]+)/i', '$1<a href="http://twitter.com/$2" target="_blank">@$2</a>', $text);

					/* now let's link hashtags */
					$text = preg_replace('/(^|\s)#([a-z0-9_]+)/i', '$1<a href="https://twitter.com/hashtag/$2" target="_blank">#$2</a>', $text);

				break;

				case 'instagram':

					/* first let's link usernames */
					$text = preg_replace('/(^|\s)@([a-z0-9_]+)/i', '$1<a href="http://instagram.com/$2" target="_blank">@$2</a>', $text);

					/* now let's link hashtags */
					$text = preg_replace('/(^|\s)#([a-z0-9_]+)/i', '$1<a href="https://instagram.com/explore/tags/$2" target="_blank">#$2</a>', $text);

				break;

			}

			/* all done let's send back the linked text in all it's glory! */
			return $text;
		}
	}
}