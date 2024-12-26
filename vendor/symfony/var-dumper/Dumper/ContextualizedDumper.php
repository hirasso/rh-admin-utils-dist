<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace RH\AdminUtils\Symfony\Component\VarDumper\Dumper;

use RH\AdminUtils\Symfony\Component\VarDumper\Cloner\Data;
use RH\AdminUtils\Symfony\Component\VarDumper\Dumper\ContextProvider\ContextProviderInterface;
/**
 * @author Kévin Thérage <therage.kevin@gmail.com>
 */
class ContextualizedDumper implements DataDumperInterface
{
    private DataDumperInterface $wrappedDumper;
    private array $contextProviders;
    /**
     * @param ContextProviderInterface[] $contextProviders
     */
    public function __construct(DataDumperInterface $wrappedDumper, array $contextProviders)
    {
        $this->wrappedDumper = $wrappedDumper;
        $this->contextProviders = $contextProviders;
    }
    public function dump(Data $data): ?string
    {
        $context = $data->getContext();
        foreach ($this->contextProviders as $contextProvider) {
            $context[$contextProvider::class] = $contextProvider->getContext();
        }
        return $this->wrappedDumper->dump($data->withContext($context));
    }
}
