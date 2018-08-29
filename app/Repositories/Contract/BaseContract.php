<?php

namespace App\Repositories\Contract;

interface BaseContract
{
    /**
     * Find resource.
     * 
     * @param mixed $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function find($id);

    /**
     * Create new resource.
     * 
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $data);

    /**
     * Update existing resource.
     * 
     * @param mixed $id
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($id, array $data);

    /**
     * Delete existing resource.
     * 
     * @param mixed $id
     * @return bool
     */
    public function delete($id);
}