<?php namespace Emm\ThePatternRS;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface ICommonFunctions
{
    public function all(array $relations = [], array $columns = ['*']): Collection;

    public function find(int $id, array $columns = ['*'], array $relations = []);

    public function first(array $columns = ['*'], array $relations = []);

    public function paginate($limit = null, array $columns = ['*'], array $relations = []): Collection;

    public function findBy(string $field, $value, $columns = ['*'], array $relations = []);

    public function getBy(array $where, array $columns = ['*'], array $relations = []): Collection;

    public function getWhereIn(string $field, array $values, array $columns = ['*'], array $relations = []): Collection;

    public function getWhereNotIn(
        string $field,
        array $values,
        array $columns = ['*'],
        array $relations = []
    ): Collection;

    public function create(array $attributes): Model;

    public function update(array $attributes, int $id): bool;

    public function updateBy(array $where, array $inputs): bool;

    public function updateWhereIn(string $field, array $values, array $inputs): bool;

    public function delete(int $id): bool;

}