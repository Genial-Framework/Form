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

/**
 * Config.
 */
class Configuration implements ConfigurationInterface
{

    /**
     * @var string $name The form name.
     */
    private $name = 'genial-framework-form';

    /**
     * @var string $method The form method.
     */
    private $method = 'POST';

    /**
     * Construct a new configuration.
     *
     * @param string $name   The form name.
     * @param string $method The form method.
     *
     * @throws Exception\LengthException          If the form name is too long.
     * @throws Exception\UnexpectedValueException If the form method is unknown or unsupported.
     *
     * @return void Return nothing.
     */
    public function __construct(string $name = 'genial-framework-form', string $method = 'POST')
    {
        $methods = [
            'POST',
            'GET'
        ];
        $name = \trim($name);
        $name = \htmlspecialchars($name, \ENT_QUOTES);
        if ($name == '') {
            $name = 'genial-framework-form';
        }
        if (\strlen($name) > 67) {
            throw new Exception\LengthException('The form name is too long');
        }
        if (!\in_array($method, $methods)) {
            throw new Exception\UnexpectedValueException('The method is unknown or unsupported.');
        }
        $method = \strtoupper($method);
        $this->name = $name;
        $this->method = $method;
    }

    /**
     * Get the form method.
     *
     * @return string Return the form method.
     */
    public function method(): string
    {
        return $this->method;
    }

    /**
     * Get the form name.
     *
     * @return string Return the form name.
     */
    public function name(): string
    {
        return $this->name;
    }

}
