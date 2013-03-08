<?php

namespace Net\Bazzline\TaskMentor\Queue;

use DateTime;
use Net\Bazzline\TaskMentor\Task\TaskInterface;

/**
 * @author stev leibelt
 * @since 2013-03-09
 */
interface QueueableInterface
{
    /**
     * @author stev leibelt
     * @param \Net\Bazzline\TaskMentor\Task\TaskInterface $task
     * @since 2013-03-09
     */
    public function enqeueTask(TaskInterface $task);

    /**
     * @author stev leibelt
     * @param \DateTime $starttime
     * @return \SplObjectStorage (TaskInterface instances)
     * @since 2013-03-09
     */
    public function dequeueTasks(DateTime $starttime);
}