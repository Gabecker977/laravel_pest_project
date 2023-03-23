<?php
test("Do not use dd in this project",function(){
    expect(['dd'])->not->toBeUsed();
});
