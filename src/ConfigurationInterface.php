<?php
declare(strict_types=1);
/**
 * Genial Framework.
 *
 * @author  Nicholas English         <nenglish6657@gmail.com>.
 * @author  Genial\Form Contributors <https://github.com/Genial-Framework/Form/graphs/contributors>.
 *
 * @link    <https://github.com/Genial-Framework/Form> Github Repository.
 * @license <https://github.com/Genial-Framework/Form/blob/master/LICENSE> MIT License.
 *
 * @package genial-framework/form.
 */

namespace Genial\Form;

/**
 * ConfigurationInterface.
 */
interface ConfigurationInterface
{

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
    public function __construct(string $name = 'genial-framework/form', string $method = 'POST');

    /**
     * Get the form method.
     *
     * @return string Return the form method.
     */
    public function method(): string;

    /**
     * Get the form name.
     *
     * @return string Return the form name.
     */
    public function name(): string;

}
