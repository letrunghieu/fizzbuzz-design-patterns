<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\Visitor;

use HieuLe\FizzBuzz\Visitor\Node\BuzzNode;
use HieuLe\FizzBuzz\Visitor\Node\FizzBuzzNode;
use HieuLe\FizzBuzz\Visitor\Node\FizzNode;
use HieuLe\FizzBuzz\Visitor\Node\OtherNode;

interface VisitorInterface
{
    public function visitFizzNode(FizzNode $node);

    public function visitBuzzNode(BuzzNode $node);

    public function visitFizzBuzzNode(FizzBuzzNode $node);

    public function visitOtherNode(OtherNode $node);
}
