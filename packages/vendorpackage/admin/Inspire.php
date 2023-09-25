<?php
namespace packages\vendorpackage\admin;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        $response = "you can do it even if the odds not in ur favour";
        return $response;
    }
}
?>