<?php

if(!site()->user()){
    c::set('cache', true);
    c::set('cache.driver', 'file');
}