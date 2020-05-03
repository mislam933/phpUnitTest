<?php 
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

	protected $user;

	public function setUp(): void
	{
		$this->user = new \App\Models\User;
	}

	public function testThatWeCanGetTheFirstName()
	{

		$this->user->setFirstName('Masum');

		$this->assertEquals($this->user->getFirstName(), 'Masum');

	}

	public function testThatWeCanGetTheLastName()
	{

		$this->user->setLastName('Sarker');

		$this->assertEquals($this->user->getLastName(), 'Sarker');

	}

	public function testThatFullNameIsReturned()
	{

		$this->user->setFirstName('Masum');

		$this->user->setLastName('Sarker');

		$this->assertEquals($this->user->getFullName(), 'Masum Sarker');

	}

	public function testThatEmailAddressCanBeSet()
	{

		$this->user->setEmail('masum@email.com');

		$this->assertEquals($this->user->getEmail(), 'masum@email.com');

	}

	public function testEmailVariablesContainCorrectValues()
	{

		$this->user->setFirstName('Masum');

		$this->user->setLastName('Sarker');

		$this->user->setEmail('masum@email.com');

		$emailVariables = $this->user->getEmailVariables();

		$this->assertArrayHasKey('full_name', $emailVariables);
		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals($emailVariables['full_name'], 'Masum Sarker');
		$this->assertEquals($emailVariables['email'], 'masum@email.com');

	}








}