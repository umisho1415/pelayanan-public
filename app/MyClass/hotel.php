<?php

namespace App\MyClass;

class hotel extends pelayananPublik
{   protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function salamDariBinjai()
    {
        return "This is" . $this->getName();
    }

    public function threeMusketier()
    {
        return [
            'Data 1' => $this->data,
            'Data 2' => $this->data,
            'Data 3' => $this->data
        ];
    }
}
