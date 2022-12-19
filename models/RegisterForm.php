<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class RegisterForm extends Model
{
    public $username;
    public $password;
    public $email;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password',], 'required'],
            ['email', 'email'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Логин уже занят'],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function register()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->password = $this->password;

        return $user->save() ? $user : null;
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'email' => 'Э. почта',
            'password' => 'Пароль',
        ];
    }

}
