<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "auditing_member".
 *
 * @property int $auditing_member_id
 * @property string $name
 * @property string $start_date
 * @property string $end_date
 * @property string $college_name
 * @property string $program
 * @property string $faculty_name
 * @property int $department_id
 * @property int $academic_year_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property AcademicYear $academicYear
 * @property Department $department
 */
class AuditingMember extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auditing_member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'start_date', 'end_date', 'college_name', 'program', 'faculty_name', 'department_id', 'academic_year_id'], 'required'],
            [['start_date', 'end_date', 'created_at', 'updated_at'], 'safe'],
            [['college_name', 'faculty_name'], 'string'],
            [['department_id', 'academic_year_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['program'], 'string', 'max' => 100],
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
            'auditing_member_id' => 'Auditing Member ID',
            'name' => 'Name',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'college_name' => 'College Name',
            'program' => 'Program',
            'faculty_name' => 'Faculty Name',
            'department_id' => 'Department ',
            'academic_year_id' => 'Academic Year ',
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
