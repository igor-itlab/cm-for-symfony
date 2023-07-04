<?php

namespace App;


interface RequestBuilderInterface
{

    public function send(): Response;
}