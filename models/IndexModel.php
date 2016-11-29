<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 27.11.16
 * Time: 13:39
 */

namespace app\models;

use yii\base\Model;

class IndexModel extends Model
{
    public $firstName;
    public $lastName;
    public $login;
    public $password;
    public $age;
    public $sex;
    public $about;
    public $have;
    public $city;
    public $email;
    public $verify;

    public function rules()
    {
        return [
            [['firstName', 'lastName', 'login', 'sex', 'email', 'have', 'city', 'verify', 'password'], 'required'],
            [['firstName', 'lastName', 'login'], 'string', 'max' => 15, 'min' => 2],
            ['age', 'integer', 'max' => 100],
            [['about'], 'default', 'value' => 'no info'],
            [['age'], 'default', 'value' => 20],
            [['about'], 'string', 'max' => 1000],
            ['city', 'validateCity'],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'email'],
            ['verify', 'captcha']
        ];
    }

    public function attributeLabels()
    {
        return [
            'firstName' => 'First name',
            'lastName' => 'Last name',
            'about' => 'About me',
            'email' => 'E-mail',
        ];
    }

    public function validateCity($attribute, $params)
    {
        if (!in_array($this->$attribute, ['Cherkassy', 'Kyiv', 'Kharkiv'])) {
            $this->addError($attribute, 'City must be Cherkassy, Kyiv, or Kharkiv');
        }
    }
}