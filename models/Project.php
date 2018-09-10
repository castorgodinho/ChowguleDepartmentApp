<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $project_id
 * @property string $approval_id
 * @property string $name
 * @property string $start_date
 * @property string $end_date
 * @property string $agency_name
 * @property string $duration
 * @property double $amount
 * @property string $faculty_name
 * @property string $student_name
 * @property int $department_id
 * @property int $academic_year_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property AcademicYear $academicYear
 * @property Department $department
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'start_date', 'end_date', 'duration', 'amount', 'faculty_name', 'student_name', 'department_id', 'academic_year_id'], 'required'],
            [['start_date', 'end_date', 'created_at', 'updated_at'], 'safe'],
            [['amount'], 'number'],
            [['faculty_name', 'student_name'], 'string'],
            [['department_id', 'academic_year_id'], 'integer'],
            [['approval_id'], 'string', 'max' => 255],
            [['name'], 'string', 'max' => 100],
            [['agency_name'], 'string', 'max' => 150],
            [['duration'], 'string', 'max' => 50],
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
            'project_id' => 'Project ID',
            'approval_id' => 'Approval ID',
            'name' => 'Name',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'agency_name' => 'Agency Name',
            'duration' => 'Duration',
            'amount' => 'Amount',
            'faculty_name' => 'Faculty Name',
            'student_name' => 'Student Name',
            'department_id' => 'Department Name',
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
