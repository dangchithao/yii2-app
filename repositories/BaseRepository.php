<?php

namespace app\repositories;

use Yii;
use yii\db\ActiveRecordInterface;
use yii\db\Exception;

/**
 * Class BaseRepository
 *
 * @package app\repositories
 */
abstract class BaseRepository
{
    /**
     * @var ActiveRecordInterface
     */
    protected $model;

    /**
     * @param ActiveRecordInterface $model
     */
    public function __construct(ActiveRecordInterface $model)
    {
        $this->model = $model;
    }

    /**
     * @inheritdoc
     */
    public function getModel(): ActiveRecordInterface
    {
        return $this->model;
    }

    /**
     * @inheritdoc
     */
    public function findById(int $id): ?ActiveRecordInterface
    {
        return $this->model->findOne($id);
    }

    /**
     * @inheritdoc
     */
    public function save(ActiveRecordInterface $model, $runValidation = true): bool
    {
        return $model->save($runValidation);
    }

    /**
     * @inheritdoc
     */
    public function delete(ActiveRecordInterface $model)
    {
        return $model->delete();
    }

    /**
     * @inheritdoc
     *
     * @throws Exception
     */
    public function batchInsert(array $columns, array $rows): int
    {
        return $this->batchInsertForModel($this->model, $columns, $rows);
    }

    /**
     * @inheritdoc
     */
    public function batchUpdate(array $attributes, $condition = null): int
    {
        return $this->model->updateAll($attributes, $condition);
    }

    /**
     * @inheritdoc
     */
    public function batchDelete($conditions = null): int
    {
        return $this->batchDeleteForModel($this->model, $conditions);
    }

    /**
     * @inheritdoc
     */
    public function link(ActiveRecordInterface $fromModel, ActiveRecordInterface $toModel, string $relationName): void
    {
        $fromModel->link($relationName, $toModel);
    }

    /**
     * @inheritdoc
     */
    public function unlink(ActiveRecordInterface $fromModel, ActiveRecordInterface $toModel, string $relationName, bool $delete = false): void
    {
        $fromModel->unlink($relationName, $toModel, $delete);
    }

    /**
     * Insert records for other models in batch by providing the model, columns and record data
     *
     * @param ActiveRecordInterface $model
     * @param array $columns
     * @param array $rows
     *
     * @return int
     *
     * @throws Exception
     */
    protected function batchInsertForModel(ActiveRecordInterface $model, array $columns, array $rows): int
    {
        return Yii::$app->db->createCommand()
            ->batchInsert(
                $model->tableName(),
                $columns,
                $rows
            )->execute();
    }

    /**
     * @inheritdoc
     *
     * @throws Exception
     */
    public function batchUpdateForModel(ActiveRecordInterface $model, array $attributes, array $conditions = null): int
    {
        return Yii::$app->db->createCommand()
            ->update(
                $model->tableName(),
                $attributes,
                $conditions
            )->execute();
    }

    /**
     * Delete records for other models in batch by providing the model, conditions
     *
     * @param ActiveRecordInterface $model
     * @param mixed $conditions
     *
     * @return int
     */
    protected function batchDeleteForModel(ActiveRecordInterface $model, $conditions): int
    {
        return $model->deleteAll($conditions);
    }
}
