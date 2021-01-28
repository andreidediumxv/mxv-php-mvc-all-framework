<?php


namespace app\models;


use andreidediumxv\phpmvc\Model;

class ContactForm extends Model
{
    public string $subject = '';
    public string $email = '';
    public string $body = '';

    public function rules(): array
    {
        return [
            'subject' => [SELF::RULE_REQUIRED],
            'email' => [SELF::RULE_REQUIRED],
            'body' => [SELF::RULE_REQUIRED],
        ];
    }

    public function labels(): array
    {
        return [
            'subject' => 'Subject',
            'email' => 'Your email',
            'body' => 'Body',
        ];
    }

    public function send(){
        return true;
    }
}