<?php

/**
 * This is the model class for table "fotos".
 *
 * The followings are the available columns in table 'fotos':
 * @property integer $id
 * @property string $ruta
 * @property string $foto
 */
class Fotos extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'fotos';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id', 'required'),
            array('id', 'numerical', 'integerOnly' => true),
            array('ruta', 'length', 'max' => 256),
            array('foto', 'file', 'types' => 'jpg, jpeg, png, gif'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, ruta, foto', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'ruta' => 'Ruta',
            'foto' => 'Foto',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('ruta', $this->ruta, true);
        $criteria->compare('foto', $this->foto, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array('defaultOrder' => 'ruta ASC'), // orden por defecto según el atributo nombre
            'pagination' => array('pageSize' => 2), // personalizamos la paginación
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Fotos the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
