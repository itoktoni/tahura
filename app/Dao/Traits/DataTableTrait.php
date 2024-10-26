<?php

namespace App\Dao\Traits;

use App\Dao\Builder\DataBuilder;
use Illuminate\Support\Str;

trait DataTableTrait
{
    public function fieldStatus(): array
    {
        return [];
    }

    public function fieldDatatable(): array
    {
        return [
            DataBuilder::build($this->field_key())->name('Code'),
            DataBuilder::build($this->field_name())->name('Name')->sort(),
        ];
    }

    public function getSelectedField(): array
    {
        return collect($this->fieldDatatable())->pluck('code')->toArray();
    }

    public function getShowField()
    {
        return collect($this->fieldDatatable())->where('show', true);
    }

    public function getExcelField()
    {
        return collect($this->fieldDatatable())->where('excel', true)->pluck('code', 'name')->toArray();
    }

    public function filter($query, $value)
    {
        return $this->queryFilter($query);
    }

    public function queryFilter($query)
    {
        $search = request()->get('search');
        $value = request()->get('filter') ? request()->get('filter') : $this->fieldSearching();

        if ($search) {
            if ($this->fieldStatus() && isset($this->fieldStatus()[$value])) {
                $type = new \ReflectionClass($this->fieldStatus()[$value]);
                $instance = $type->newInstanceWithoutConstructor();
                $convert = Str::of($search)->camel()->ucfirst();
                $id = $instance->fromKey($convert) ?? false;
                if ($id) {
                    $query = $query->where($value, $id->value);
                }
            } else {
                $query = $query->where($value, 'like', "%{$search}%");
            }

            foreach (request()->except(['filter', 'search']) as $key => $val) {
                if (! empty($val)) {
                    $query = $query->where($key, $val);
                }
            }
        }

        return $query;
    }

    public function start_date($query)
    {
        $date = request()->get('start_date');
        if ($date) {
            $query = $query->whereDate($this->field_created_at(), '>=', $date);
        }

        return $query;
    }

    public function end_date($query)
    {
        $date = request()->get('end_date');

        if ($date) {
            $query = $query->whereDate($this->field_created_at(), '<=', $date);
        }

        return $query;
    }

    public function fieldSearching()
    {

        return $this->getKeyName();
    }
}
