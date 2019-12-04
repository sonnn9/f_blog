<?php

namespace App\Repositories;

interface RepositoryInterface
{

    public function find($id);

    public function create();

    public function show();

    public function edit($id);

    public function delete($id);
}
