<?php

namespace Net\Bazzline\TaskMentor\Task;

/**
 * @author stev leibelt
 * @since 2013-03-09
 */
interface ParameterInterface
{
    /**
     * @author stev leibelt
     * @return mixed
     * @since 2013-03-09
     */
    public function getName();

    /**
     * @author stev leibelt
     * @param string $name
     * @since 2013-03-09
     */
    public function setName($name);

    /**
     * @author stev leibelt
     * @return mixed
     * @since 2013-03-09
     */
    public function getValue();

    /**
     * @author stev leibelt
     * @param string $name
     * @since 2013-03-09
     */
    public function setValue($value);
}