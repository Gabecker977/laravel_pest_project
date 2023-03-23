<?php

test('Not use dd in thsi project')->expect(['dd'])
->not->toBeUsed();
