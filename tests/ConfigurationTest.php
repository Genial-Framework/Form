<?php
declare(strict_types=1);
/**
 * Genial Framework.
 *
 * @author  Nicholas English <nenglish6657@gmail.com>.
 * @link    <https://github.com/Genial-Framework/Form> Github Repository.
 * @license <https://github.com/Genial-Framework/Form/blob/master/LICENSE> MIT License.
 *
 * @package genial-framework/form
 */

namespace Genial\Form;

use PHPUnit\Framework\TestCase;

/**
 * ConfigurationTest.
 */
class ConfigurationTest extends TestCase
{

    //----//
    // {{ //
    //----//
    public function testConfigurationClass()
    {
        $configuration1 = new Configuration('mySampleForm1', 'POST');
        $configuration2 = new Configuration('mySampleForm2', 'POST');
        $configuration3 = new Configuration('mySampleForm3', 'GET');
        $configuration4 = new Configuration('mySampleForm4', 'GET');
        $configuration5 = new Configuration();
        $configuration6 = new Configuration('');
        $configuration7 = new Configuration(' ');
        $this->assertEquals($configuration1->name(), 'mySampleForm1');
        $this->assertEquals($configuration1->method(), 'POST');
        $this->assertEquals($configuration2->name(), 'mySampleForm2');
        $this->assertEquals($configuration2->method(), 'POST');
        $this->assertEquals($configuration3->name(), 'mySampleForm3');
        $this->assertEquals($configuration3->method(), 'GET');
        $this->assertEquals($configuration4->name(), 'mySampleForm4');
        $this->assertEquals($configuration4->method(), 'GET');
        $this->assertEquals($configuration5->name(), 'genial-framework-form');
        $this->assertEquals($configuration5->method(), 'POST');
        $this->assertEquals($configuration6->name(), 'genial-framework-form');
        $this->assertEquals($configuration6->method(), 'POST');
        $this->assertEquals($configuration7->name(), 'genial-framework-form');
        $this->assertEquals($configuration7->method(), 'POST');
    }
    public function testConfigurationClassExceptions1()
    {
        $this->expectException(Exception\LengthException::class);
        $configuration = new Configuration('hHrSYwS426LPU3c4nU6UzBF9SbAZ8T5nTym76KAjuTnyrThbd9dGfDDcjEXg2uacWcTw', 'POST');
    }
    public function testConfigurationClassExceptions2()
    {
        $this->expectException(Exception\UnexpectedValueException::class);
        $configuration = new Configuration('mySampleForm', 'PUT');
    }
    //----//
    // }} //
    //----//

}
