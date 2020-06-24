<?php namespace Watchlearn\Contact\Components;


use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;

class ContactForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Contact Form',
            'description' => 'Simple contact form'
        ];
    }


    public function onSend(){

        $data = post();




        $rules = [
                  'name' => 'required|min:5',
                  'email' => 'required|email'
                  ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()){
            throw new ValidationException($validator);

          } else {
            $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'content' => Input::get('content')];

            Mail::send('watchlearn.contact::mail.message', $vars, function($message){

                $message->to('zackdowney101@gmail.com', 'Admin Person');
                $message->subject('Nuevo Mensaje de Contacto');

          });

}

}

}
