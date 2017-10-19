<?php

namespace app\models;

use Yii;
use yii\base\Model;

Class EntryForm extends Model
{
	public $name;
	public $email;

	public function rules(){
		return[
			[['name','email'],'required'],
			['email','email']
		];
	}
}