<?php
/**
 * Meta base class for plugin
 */

namespace deartwenty\dear\wordpress;

defined('ABSPATH') or die('Ready for fun? :-) ');

trait MetaTrait {



    public function addMethod($methodName, $methodCallable) {
    }

    public function __call($methodName, array $args) {
    }
	
}