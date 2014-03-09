<?php

namespace Net\Bazzline\TaskMentor\Task;

/**
 * @author stev leibelt
 * @since 2013-03-09
 */
interface TaskInterface
{
    /**
     * @author stev leibelt
     * @since 2013-03-09
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    public function execute();

    /**
     * @author stev leibelt
     * @param \Net\Bazzline\TaskMentor\Task\ParameterInterface $parameter
     * @since 2013-03-09
     */
    public function addParameter(ParameterInterface $parameter);

    public function addParameters(SplObjectStorage $parameters);

    /**
     * @author stev leibelt
     * @return \SplObjectStorage (ParameterInterface instances)
     * @since 2013-03-09
     */
    public function getParameters();
}