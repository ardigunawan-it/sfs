<?php
/*  \models\SignupForm.php */

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $first_name;
    public $last_name;
    public $address;
    public $no_hp;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['address', 'string', 'max' => 255],
            ['first_name', 'string', 'max' => 20],
            ['last_name', 'string', 'max' => 20],
            ['no_hp', 'string', 'max' => 13],
        ];
    }

    /**
     * Signs user up.
     * 
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->first_name = $this->first_name;
            $user->last_name = $this->last_name;
            $user->address = $this->address;
            $user->no_hp = $this->no_hp;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->save();
            return $user ;
        }
            return null;
    }

}