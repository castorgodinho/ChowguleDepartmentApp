<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paper_type".
 *
 * @property int $paper_type_id
 * @property int $paper_id
 * @property int $type_id
 * @property int $academic_year_id
 *
 * @property AcademicYear $academicYear
 * @property Paper $paper
 * @property Type $type
 */
class PaperType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paper_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['paper_id', 'type_id', 'academic_year_id'], 'integer'],
=======
            
            [['paper_type_id', 'paper_id', 'type_id', 'academic_year_id'], 'integer'],
            [['paper_type_id'], 'unique'],
>>>>>>> d6c49a963a2167a9af337c8f1ac3559dba6a13cd
            [['academic_year_id'], 'exist', 'skipOnError' => true, 'targetClass' => AcademicYear::className(), 'targetAttribute' => ['academic_year_id' => 'academic_year_id']],
            [['paper_id'], 'exist', 'skipOnError' => true, 'targetClass' => Paper::className(), 'targetAttribute' => ['paper_id' => 'paper_id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['type_id' => 'type_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'paper_type_id' => 'Paper Type ID',
<<<<<<< HEAD
            'paper_id' => 'Paper ID',
            'type_id' => 'Type ID',
            'academic_year_id' => 'Academic Year ID',
=======
            'paper_id' => 'Paper Name',
            'type_id' => 'Type Name',
            'academic_year_id' => 'Academic Year ',
>>>>>>> d6c49a963a2167a9af337c8f1ac3559dba6a13cd
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
    public function getPaper()
    {
        return $this->hasOne(Paper::className(), ['paper_id' => 'paper_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::className(), ['type_id' => 'type_id']);
    }
}
