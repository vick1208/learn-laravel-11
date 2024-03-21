<?php

// test('example', function () {
//     $response = $this->get('/');

//     $response->assertStatus(200);
// });


test('say hello to pest',function(){
    $greet = "Hello World!!";

    expect($greet)->toEqual("Hello World!!");
});
