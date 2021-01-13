<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\Visitors;

use HieuLe\FizzBuzz\Visitors\Nodes\BuzzNode;
use HieuLe\FizzBuzz\Visitors\Nodes\FizzBuzzNode;
use HieuLe\FizzBuzz\Visitors\Nodes\FizzNode;
use HieuLe\FizzBuzz\Visitors\Nodes\OtherNode;

interface VisitorInterface
{
    public function visitFizzNode(FizzNode $node);

    public function visitBuzzNode(BuzzNode $node);

    public function visitFizzBuzzNode(FizzBuzzNode $node);

    public function visitOtherNode(OtherNode $node);
}
