<?php

/**
 * This is the model class for table "t_usuarios".
 *
 * The followings are the available columns in table 't_usuarios':
 * @property integer $IDUSUARIO
 * @property integer $IDROL
 * @property integer $IDPAIS
 * @property string $NOMBRES
 * @property string $APELLIDOS
 * @property string $CORREO
 * @property string $USUARIO
 * @property string $CLAVE
 *
 * The followings are the available model relations:
 * @property TRoles $iDROL
 */
class TUsuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDROL, IDPAIS', 'numerical', 'integerOnly'=>true),
			array('NOMBRES, APELLIDOS, CORREO, USUARIO', 'length', 'max'=>100),
			array('CLAVE', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDUSUARIO, IDROL, IDPAIS, NOMBRES, APELLIDOS, CORREO, USUARIO, CLAVE', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'iDROL' => array(self::BELONGS_TO, 'TRoles', 'IDROL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDUSUARIO' => 'Idusuario',
			'IDROL' => 'Idrol',
			'IDPAIS' => 'Idpais',
			'NOMBRES' => 'Nombres',
			'APELLIDOS' => 'Apellidos',
			'CORREO' => 'Correo',
			'USUARIO' => 'Usuario',
			'CLAVE' => 'Clave',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('IDUSUARIO',$this->IDUSUARIO);
		$criteria->compare('IDROL',$this->IDROL);
		$criteria->compare('IDPAIS',$this->IDPAIS);
		$criteria->compare('NOMBRES',$this->NOMBRES,true);
		$criteria->compare('APELLIDOS',$this->APELLIDOS,true);
		$criteria->compare('CORREO',$this->CORREO,true);
		$criteria->compare('USUARIO',$this->USUARIO,true);
		$criteria->compare('CLAVE',$this->CLAVE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TUsuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
