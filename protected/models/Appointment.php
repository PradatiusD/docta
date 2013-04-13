<?php

/**
 * This is the model class for table "appointment".
 *
 * The followings are the available columns in table 'appointment':
 * @property string $id
 * @property string $patient_id
 * @property string $appointment_date
 * @property string $note
 * @property integer $is_sms_sent
 * @property integer $is_automated_call_made
 * @property integer $is_call_made
 */
class Appointment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Appointment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'appointment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('patient_id', 'required'),
			array('is_sms_sent, is_automated_call_made, is_call_made', 'numerical', 'integerOnly'=>true),
			array('patient_id', 'length', 'max'=>20),
			array('note', 'length', 'max'=>255),
			array('appointment_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, patient_id, appointment_date, note, is_sms_sent, is_automated_call_made, is_call_made', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'patient_id' => 'Patient',
			'appointment_date' => 'Appointment Date',
			'note' => 'Note',
			'is_sms_sent' => 'Is Sms Sent',
			'is_automated_call_made' => 'Is Automated Call Made',
			'is_call_made' => 'Is Call Made',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('patient_id',$this->patient_id,true);
		$criteria->compare('appointment_date',$this->appointment_date,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('is_sms_sent',$this->is_sms_sent);
		$criteria->compare('is_automated_call_made',$this->is_automated_call_made);
		$criteria->compare('is_call_made',$this->is_call_made);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}