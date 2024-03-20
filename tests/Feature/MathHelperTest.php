<?php

use App\Helpers\MathHelper;

// test('example', function () {
//     $response = $this->get('/');

//     $response->assertStatus(200);
// });

test('once function', function () {
    $result1 = MathHelper::add(10,10);
    $result2 = MathHelper::add(10,10);
    $result3 = MathHelper::add(20,10);
    expect($result1)->toBe(20);
    expect($result2)->toBe(20);
    expect($result3)->toBe(30);
});
