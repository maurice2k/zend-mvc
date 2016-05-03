<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Mvc\Controller\TestAsset;

use Zend\Mvc\Controller\AbstractActionController;

class BadController extends AbstractActionController
{
    public function testAction()
    {
        throw new \Exception('Raised an exception');
    }

    public function testPhp7ErrorAction()
    {
        throw new \Error('Raised an error');
    }
}
