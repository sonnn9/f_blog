<?php

namespace App\Repositories;

interface RepositoryInterface
{

    public function find($id);

    public function Create();

    public function show();

    public function edit($id);

    public function delete($id);
}
