<?php

namespace AcceptcoinApi;


interface RequestBuilderInterface
{

    public function send(): Response;
}