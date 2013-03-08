<?php

namespace Net\Bazzline\TaskMentor\Task;

/**
 * @author stev leibelt
 * @since 2013-03-09
 */
interface RepeatableInterface
{
    /**
     * @author stev leibelt
     * @return \DateTime
     * @since 2013-03-09
     */
    public function getNextStarttime();
}