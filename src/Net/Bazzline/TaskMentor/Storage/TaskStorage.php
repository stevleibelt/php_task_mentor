<?php

namespace Net\Bazzline\TaskMentor\Storage;

use Net\Bazzline\TaskMentor\Task\TaskInterface;

/**
 * @author stev leibelt
 * @since 2013-03-10
 */
class TaskStorage implements TaskStorageInterface
{
    /**
     * @author stev leibelt
     * @param \Net\Bazzline\TaskMentor\Task\TaskInterface $task
     * @retrun \Net\Bazzline\TaskMentor\Task\TaskInterface $task
     * @since 2013-03-10
     */
    public function storeTask(TaskInterface $task)
    {
        return $task;
    }

    /**
     * @author stev leibelt
     * @param \Net\Bazzline\TaskMentor\Task\TaskInterface $task
     * @retrun \Net\Bazzline\TaskMentor\Task\TaskInterface $task
     * @since 2013-03-10
     */
    public function findOneTask(TaskInterface $task)
    {
        return $task;
    }

    /**
     * @author stev leibelt
     * @param \Net\Bazzline\TaskMentor\Task\TaskInterface $task
     * @retrun \SplObjectStorage
     * @since 2013-03-10
     */
    public function findTasks(TaskInterface $task)
    {
        return $task;
    }
}