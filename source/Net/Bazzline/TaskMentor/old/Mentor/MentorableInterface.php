<?php

namespace Net\Bazzline\TaskMentor\Mentor;

use Net\Bazzline\TaskMentor\Task\TaskInterface;

/**
 * @author stev leibelt
 * @since 2013-03-09
 */
interface MentorableInterface
{
    /**
     * @author stev leibelt
     * @param \Net\Bazzline\TaskMentor\Task\TaskInterface $task
     * @since 2013-03-09
     */
    public function attachTask(TaskInterface $task);

    /**
     * @author stev leibelt
     * @param \Net\Bazzline\TaskMentor\Task\TaskInterface $task
     * @since 2013-03-09
     */
    public function detachTask(TaskInterface $task);

    /**
     * @author stev leibelt
     * @return \SplObjectStorage (TaskInterface instances)
     * @since 2013-03-09
     */
    public function getAttachedTasks();
}