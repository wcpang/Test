<?php
require_once 'calculator.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * calculator test case.
 */
class calculatorTest extends PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var calculator
	 */
	private $calculator;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated calculatorTest::setUp()
		
		$this->calculator = new calculator(/* parameters */);
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated calculatorTest::tearDown()
		$this->calculator = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}
	
	/**
	 * Tests calculator->add()
	 */
	public function testAdd() {
		// TODO Auto-generated calculatorTest->testAdd()
		//$this->markTestIncomplete ( "add test not implemented" );
		
		$actual = $this->calculator->add(2,3);
		$this->assertEquals(5, $actual);
	}
	
	/**
	 * Tests calculator->multiply()
	 */
	public function testMultiply() {
		// TODO Auto-generated calculatorTest->testMultiply()
		$this->markTestIncomplete ( "multiply test not implemented" );
		
		$this->calculator->multiply(/* parameters */);
	}
	
	/**
	 * Tests calculator->divide()
	 */
	public function testDivide() {
		// TODO Auto-generated calculatorTest->testDivide()
		$this->markTestIncomplete ( "divide test not implemented" );
		
		$this->calculator->divide(/* parameters */);
	}
	
	/**
	 * Tests calculator->subtract()
	 */
	public function testSubtract() {
		// TODO Auto-generated calculatorTest->testSubtract()
		$this->markTestIncomplete ( "subtract test not implemented" );
		
		$this->calculator->subtract(/* parameters */);
	}
}

