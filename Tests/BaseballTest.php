<?php
namespace stats\Test;

use stats\Baseball;

class BaseballTest extends \PHPUnit_Framework_TestCase
{
  public function testCalcAvgEquals()
  {
    $atBats = 39;
    $hits = 129;
    $baseball = new Baseball();
    $result = $baseball->calc_avg($atbats, $hits);
    $expectedResult = $hits/$atbats;
    $this->assertEquals($expextedResult,$result);

  }



}

?>