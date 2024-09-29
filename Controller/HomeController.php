<?php

namespace Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data("x", 10);

        $this->display("home");
    }
}