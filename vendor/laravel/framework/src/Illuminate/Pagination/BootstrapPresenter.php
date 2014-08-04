<?php namespace Illuminate\Pagination;

class BootstrapPresenter extends Presenter {

	/**
	 * Get HTML wrapper for a page link.
	 *
	 * @param  string  $url
	 * @param  int  $page
	 * @param  string  $rel
	 * @return string
	 */
	public function getPageLinkWrapper($url, $page, $rel = null)
	{
		if(!is_null($rel)){
			if('prev'===$rel){
				$rel = 'extend prev';
			} else {
				$rel = 'extend next';
			}
		}else {
			$rel = 'page-number';
		}
		return '<a class="'.$rel.'"" href="'.$url.'">'.$page.'</a>';
	}

	/**
	 * Get HTML wrapper for disabled text.
	 *
	 * @param  string  $text
	 * @return string
	 */
	public function getDisabledTextWrapper($text)
	{
		return '<span class="page-number current">'.$text.'</span>';
	}

	/**
	 * Get HTML wrapper for active text.
	 *
	 * @param  string  $text
	 * @return string
	 */
	public function getActivePageWrapper($text)
	{
		return '<span class="page-number current">'.$text.'</span>';
	}

}
