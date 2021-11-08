<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class RegistreerController {

	public function registrationForm() {

		$template_engine = get_template_engine();
		echo $template_engine->render('register_form');

	}

	public function registrationProcess(){
	
		$result = validateRegistrationData($_POST);

		if ( count( $result['errors'] ) === 0 ) {

			if ( userNotRegistered($result['data']['email'])) {

				createUser($result['data']['voornaam'], $result['data']['achternaam'], $result['data']['email'], $result['data']['wachtwoord']);

				$bedanktUrl = url('register.thankyou');
				redirect($bedanktUrl);
				

			
			} else {
				$errors['email'] = 'Deze email is al in gebruik';
			}
		}

		$template_engine = get_template_engine();
		echo $template_engine->render('register_form' , ['errors' => $result['errors']] );


	}

	public function registrationthankyou(){

		$template_engine = get_template_engine();
		echo $template_engine->render("register_thankyou");

	}


}