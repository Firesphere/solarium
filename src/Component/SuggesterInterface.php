<?php

namespace Solarium\Component;

use Solarium\Core\ConfigurableInterface;

/**
 * Suggester Interface.
 */
interface SuggesterInterface extends ConfigurableInterface
{
    /**
     * Get query option.
     *
     * @return string|null
     */
    public function getQuery(): ?string;

    /**
     * Set dictionary option.
     *
     * The name of the dictionary to use
     *
     * @param string $dictionary
     *
     * @return self Provides fluent interface
     */
    public function setDictionary(string $dictionary): SuggesterInterface;

    /**
     * Get dictionary option.
     *
     * @return string|null
     */
    public function getDictionary(): ?string;

    /**
     * Set count option.
     *
     * The maximum number of suggestions to return
     *
     * @param int $count
     *
     * @return self Provides fluent interface
     */
    public function setCount(int $count): SuggesterInterface;

    /**
     * Get count option.
     *
     * @return int|null
     */
    public function getCount(): ?int;

    /**
     * Set cfq option.
     *
     * A Context Filter Query used to filter suggestions based on the context field, if supported by the suggester.
     *
     * @param string $cfq
     *
     * @return self Provides fluent interface
     */
    public function setContextFilterQuery(string $cfq): SuggesterInterface;

    /**
     * Get cfq option.
     *
     * @return string|null
     */
    public function getContextFilterQuery(): ?string;

    /**
     * Set build option.
     *
     * @param bool $build
     *
     * @return self Provides fluent interface
     */
    public function setBuild(bool $build): SuggesterInterface;

    /**
     * Get build option.
     *
     * @return bool|null
     */
    public function getBuild(): ?bool;

    /**
     * Set reload option.
     *
     * @param bool $reload
     *
     * @return self Provides fluent interface
     */
    public function setReload(bool $reload): SuggesterInterface;

    /**
     * Get reload option.
     *
     * @return bool|null
     */
    public function getReload(): ?bool;
}
