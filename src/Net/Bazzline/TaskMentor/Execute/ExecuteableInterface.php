<?php

namespace Net\Bazzline\TaskMentor\Execute;

use Net\Bazzline\TaskMentor\Task\TaskInterface;

/**
 * @author stev leibelt
 * @since 2013-03-09
 */
interface ExecuteableInterface
{
    /**
     * @author stev leibelt
     * @param \Net\Bazzline\TaskMentor\Task\TaskInterface $task
     * @since 2013-03-09
     */
    public function addTask(TaskInterface $task);

    /**
     * @author stev leibelt
     * @since 2013-03-09
     */
    public function executeTasks();
}