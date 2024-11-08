<?php

interface Crud{
    public function create();
    public function read();
    public function update($arrayInfos);
    public function delete();
}