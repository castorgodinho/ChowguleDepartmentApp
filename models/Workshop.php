<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "workshop".
 *
 * @property int $workshop_id
 * @property string $name
 * @property int $inhouse
 * @property double $cost
 * @property string $participant
 * @property string $faculty_name
 * @property string $start_date
 * @property string $end_date
 * @property int $department_id
 * @property int $academic_year_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property AcademicYear $academicYear
 * @property Department $department
 */
class Workshop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workshop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'inhouse', 'cost', 'participant', 'faculty_name', 'start_date', 'end_date', 'department_id', 'academic_year_id'], 'required'],
            [['cost'], 'number'],
            [['participant', 'faculty_name'], 'string'],
            [['start_date', 'end_date', 'created_at', 'updated_at'], 'safe'],
            [['department_id', 'academic_year_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['inhouse'], 'string', 'max' => 1],
            [['academic_year_id'], 'exist', 'skipOnError' => true, 'targetClass' => AcademicYear::className(), 'targetAttribute' => ['academic_year_id' => 'academic_year_id']],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'department_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'workshop_id' => 'Workshop ID',
            'name' => 'Name',
            'inhouse' => 'Inhouse',
            'cost' => 'Cost',
            'participant' => 'Participant',
            'faculty_name' => 'Faculty Name',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'department_id' => 'Department',
            'academic_year_id' => 'Academic Year',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicYear()
    {
        return $this->hasOne(AcademicYear::className(), ['academic_year_id' => 'academic_year_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['department_id' => 'department_id']);
    }
}
