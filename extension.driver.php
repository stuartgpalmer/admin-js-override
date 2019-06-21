<?php

	Class extension_admin_js_override extends Extension{

		public function getSubscribedDelegates(){
			return array(
				array(
					'page'     => '/backend/',
					'delegate' => 'InitaliseAdminPageHead',
					'callback' => 'appendAssets'
				),
			);
		}

	/*-------------------------------------------------------------------------
		Delegates:
	-------------------------------------------------------------------------*/

		public function appendAssets() {
			Administration::instance()->Page->addScriptToHead(URL . '/workspace/js/admin_js_override.js', 1000, false);
		}

	}
