<?php
App::uses('AppModel', 'Model');

/**
 * Class User
 */
class User extends AppModel
{

    public $validate = array(
        'username'=>array(
            'notBlank'=>array(
                'rule'=>array('notBlank'),
                'message'=>'Username wajib di isi.'
            ),
            'length'=>array(
                'rule'=>array('lengthBetween',6,12),
                'message'=>'Pastikan panjang username antara 6 - 12 aksara',
                'on'=>'create',
                //'allowEmpty'=>false,
                //'required'=>false,
                //'last'=>true
            )
        ),
        'password'=>array(
            'notBlank'=>array(
                'rule'=>array('notBlank'),
                'message'=>'Password wajib di isi.'
            ),
            'length'=>array(
                'rule'=>array('lengthBetween',6,12),
                'message'=>'Pastikan panjang username antara 6 - 12 aksara',
                'on'=>'create',
                //'allowEmpty'=>false,
                //'required'=>false,
                //'last'=>true
            ),
            'alphaNumeric'=>array(
                'rule'=>'/^[a-z0-9]{6,12}$/i',
                'message'=>'Password mesti mempunyai gambungan huruf dan nombor'
            )
        ),
        'role'=>array(
            'notBlank'=>array(
                'rule'=>array('notBlank'),
                'message'=>'Role wajib di isi.'
            )
        ),
    );
}