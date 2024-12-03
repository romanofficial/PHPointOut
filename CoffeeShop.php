<?php
namespace Coffee;

class CoffeeShop {
    protected array $recipes = [];

    public function register($coffeeName, Callable $make) {
        $this->recipes[$coffeeName] = $make;
    }

    public function serve($coffeeName) {
        if (!isset($this->recipes[$coffeeName])) {
            return 'Sorry, we don\'t serve that.';
        }

        $coffee = call_user_func($this->recipes[$coffeeName]);
        return $coffee->serve();
    }
}
