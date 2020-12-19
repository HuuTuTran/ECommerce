<?php
namespace Opencart\Application\Controller\Mail;
class Customer extends \Opencart\System\Engine\Controller {
	public function approve(&$route, &$args, &$output) {
		$this->load->model('customer/customer');

		$customer_info = $this->model_customer_customer->getCustomer($args[0]);

		if ($customer_info) {
			$this->load->model('tool/image');

			if (is_file(DIR_IMAGE . html_entity_decode($this->config->get('config_logo'), ENT_QUOTES, 'UTF-8'))) {
				$data['logo'] = $this->model_tool_image->resize(html_entity_decode($this->config->get('config_logo'), ENT_QUOTES, 'UTF-8'), $this->config->get('theme_default_image_location_width'), $this->config->get('theme_default_image_cart_height'));
			} else {
				$data['logo'] = '';
			}

			$this->load->model('setting/store');

			$store_info = $this->model_setting_store->getStore($customer_info['store_id']);

			if ($store_info) {
				$store_name = html_entity_decode($store_info['name'], ENT_QUOTES, 'UTF-8');
				$store_url = $store_info['url'];
			} else {
				$store_name = html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8');
				$store_url = HTTP_CATALOG;
			}

			$this->load->model('localisation/language');

			$language_info = $this->model_localisation_language->getLanguage($customer_info['language_id']);

			if ($language_info) {
				$language_code = $language_info['code'];
			} else {
				$language_code = $this->config->get('config_language');
			}

			// Load the language for any mails using a different country code and prefixing it so it does not pollute the main data pool.
			$this->language->load($language_code, 'mail', $language_code);
			$this->language->load('mail/customer_approve', 'mail', $language_code);

			// Add language vars to the template folder
			$results = $this->language->all();

			foreach ($results as $key => $value) {
				if (substr($key, 0, 5) == 'mail_') {
					$data[substr($key, 5)] = $value;
				}
			}

			$subject = sprintf($this->language->get('mail_text_subject'), $store_name);

			$data['text_welcome'] = sprintf($this->language->get('mail_text_welcome'), $store_name);

			$data['login'] = $store_url . 'index.php?route=account/login';
			$data['store'] = $store_name;
			$data['store_url'] = $store_url;

			$mail = new \Opencart\System\Library\Mail($this->config->get('config_mail_engine'));
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

			$mail->setTo($customer_info['email']);
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender($store_name);
			$mail->setSubject($subject);
			$mail->setHtml($this->load->view('mail/customer_approve', $data));
			$mail->send();
		}
	}

	public function deny(&$route, &$args, &$output) {
		$this->load->model('customer/customer');

		$customer_info = $this->model_customer_customer->getCustomer($args[0]);

		if ($customer_info) {
			$this->load->model('tool/image');

			if (is_file(DIR_IMAGE . html_entity_decode($this->config->get('config_logo'), ENT_QUOTES, 'UTF-8'))) {
				$data['logo'] = $this->model_tool_image->resize(html_entity_decode($this->config->get('config_logo'), ENT_QUOTES, 'UTF-8'), $this->config->get('theme_default_image_location_width'), $this->config->get('theme_default_image_cart_height'));
			} else {
				$data['logo'] = '';
			}

			$this->load->model('setting/store');

			$store_info = $this->model_setting_store->getStore($customer_info['store_id']);

			if ($store_info) {
				$store_name = html_entity_decode($store_info['name'], ENT_QUOTES, 'UTF-8');
				$store_url = $store_info['url'];
			} else {
				$store_name = html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8');
				$store_url = HTTP_CATALOG;
			}

			$this->load->model('localisation/language');

			$language_info = $this->model_localisation_language->getLanguage($customer_info['language_id']);

			if ($language_info) {
				$language_code = $language_info['code'];
			} else {
				$language_code = $this->config->get('config_language');
			}

			// Load the language for any mails using a different country code and prefixing it so it does not pollute the main data pool.
			$this->language->load($language_code, 'mail', $language_code);
			$this->language->load('mail/customer_deny', 'mail', $language_code);

			// Add language vars to the template folder
			$results = $this->language->all();

			foreach ($results as $key => $value) {
				if (substr($key, 0, 5) == 'mail_') {
					$data[substr($key, 5)] = $value;
				}
			}

			$subject = sprintf($this->language->get('mail_text_subject'), $store_name);

			$data['text_welcome'] = sprintf($this->language->get('mail_text_welcome'), $store_name);

			$data['contact'] = $store_url . 'index.php?route=information/contact';
			$data['store'] = $store_name;
			$data['store_url'] = $store_url;

			$mail = new \Opencart\System\Library\Mail($this->config->get('config_mail_engine'));
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

			$mail->setTo($customer_info['email']);
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender($store_name);
			$mail->setSubject($subject);
			$mail->setHtml($this->load->view('mail/customer_deny', $data));
			$mail->send();
		}
	}
}
