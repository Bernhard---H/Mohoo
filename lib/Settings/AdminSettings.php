<?php
namespace OCA\Mohoo\Settings;

use OCP\AppFramework\Http\TemplateResponse;
use OCP\Settings\ISettings;

/**
 * @author Bernhard Halbartschlager
 */

class AdminSettings implements ISettings {

	public function getForm() {
		return new TemplateResponse('mohoo', 'admin/index');
	}

	public function getSection() {
		return "sociallogin";
	}

	public function getPriority() {
		return 50;
	}
}
