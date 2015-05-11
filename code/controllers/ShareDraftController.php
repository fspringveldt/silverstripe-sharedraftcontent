<?php

class ShareDraftController extends Controller {

	private static $allowed_actions = array(
		'preview'
	);

	private static $url_handlers = array(
		'$Key/$Token' => 'preview'
	);

	public function preview() {
		// TODO: Add the actual check.
		$tokenExpired = false;

		if (!$tokenExpired) {
			// Show the draft content.
			return $this->render();
		} else {
			Requirements::css(SHAREDDRAFTCONTENT_DIR . '/css/main.css');
			return $this->renderWith('ShareDraftContentError');
		}
	}
}