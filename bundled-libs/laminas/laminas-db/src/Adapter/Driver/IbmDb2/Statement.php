<?php

/**
 * @see       https://github.com/laminas/laminas-db for the canonical source repository
 * @copyright https://github.com/laminas/laminas-db/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-db/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Db\Adapter\Driver\IbmDb2;

use ErrorException;
use Laminas\Db\Adapter\Driver\StatementInterface;
use Laminas\Db\Adapter\Exception;
use Laminas\Db\Adapter\ParameterContainer;
use Laminas\Db\Adapter\Profiler;

class Statement implements StatementInterface, Profiler\ProfilerAwareInterface
{
    /**
     * @var resource
     */
    protected $db2 = null;

    /**
     * @var IbmDb2
     */
    protected $driver = null;

    /**
     * @var Profiler\ProfilerInterface
     */
    protected $profiler = null;

    /**
     * @var string
     */
    protected $sql = '';

    /**
     * @var ParameterContainer
     */
    protected $parameterContainer = null;

    /**
     * @var bool
     */
    protected $isPrepared = false;

    /**
     * @var resource
     */
    protected $resource = null;

    /**
     * @param $resource
     * @return self Provides a fluent interface
     */
    public function initialize($resource)
    {
        $this->db2 = $resource;
        return $this;
    }

    /**
     * @param IbmDb2 $driver
     * @return self Provides a fluent interface
     */
    public function setDriver(IbmDb2 $driver)
    {
        $this->driver = $driver;
        return $this;
    }

    /**
     * @param Profiler\ProfilerInterface $profiler
     * @return self Provides a fluent interface
     */
    public function setProfiler(Profiler\ProfilerInterface $profiler)
    {
        $this->profiler = $profiler;
        return $this;
    }

    /**
     * @return null|Profiler\ProfilerInterface
     */
    public function getProfiler()
    {
        return $this->profiler;
    }

    /**
     * Set sql
     *
     * @param $sql
     * @return self Provides a fluent interface
     */
    public function setSql($sql)
    {
        $this->sql = $sql;
        return $this;
    }

    /**
     * Get sql
     *
     * @return mixed
     */
    public function getSql()
    {
        return $this->sql;
    }

    /**
     * Set parameter container
     *
     * @param ParameterContainer $parameterContainer
     * @return self Provides a fluent interface
     */
    public function setParameterContainer(ParameterContainer $parameterContainer)
    {
        $this->parameterContainer = $parameterContainer;
        return $this;
    }

    /**
     * Get parameter container
     *
     * @return mixed
     */
    public function getParameterContainer()
    {
        return $this->parameterContainer;
    }

    /**
     * @param $resource
     * @throws \Laminas\Db\Adapter\Exception\InvalidArgumentException
     */
    public function setResource($resource)
    {
        if (get_resource_type($resource) !== 'DB2 Statement') {
            throw new Exception\InvalidArgumentException('Resource must be of type DB2 Statement');
        }
        $this->resource = $resource;
    }

    /**
     * Get resource
     *
     * @return resource
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Prepare sql
     *
     * @param string|null $sql
     * @return self Provides a fluent interface
     * @throws Exception\RuntimeException
     */
    public function prepare($sql = null)
    {
        if ($this->isPrepared) {
            throw new Exception\RuntimeException('This statement has been prepared already');
        }

        if ($sql === null) {
            $sql = $this->sql;
        }

        try {
            set_error_handler($this->createErrorHandler());
            $this->resource = db2_prepare($this->db2, $sql);
        } catch (ErrorException $e) {
            throw new Exception\RuntimeException($e->getMessage() . '. ' . db2_stmt_errormsg(), db2_stmt_error(), $e);
        } finally {
            restore_error_handler();
        }

        if ($this->resource === false) {
            throw new Exception\RuntimeException(db2_stmt_errormsg(), db2_stmt_error());
        }

        $this->isPrepared = true;
        return $this;
    }

    /**
     * Check if is prepared
     *
     * @return bool
     */
    public function isPrepared()
    {
        return $this->isPrepared;
    }

    /**
     * Execute
     *
     * @param null|array|ParameterContainer $parameters
     * @return Result
     */
    public function execute($parameters = null)
    {
        if (! $this->isPrepared) {
            $this->prepare();
        }

        /** START Standard ParameterContainer Merging Block */
        if (! $this->parameterContainer instanceof ParameterContainer) {
            if ($parameters instanceof ParameterContainer) {
                $this->parameterContainer = $parameters;
                $parameters = null;
            } else {
                $this->parameterContainer = new ParameterContainer();
            }
        }

        if (is_array($parameters)) {
            $this->parameterContainer->setFromArray($parameters);
        }
        /** END Standard ParameterContainer Merging Block */

        if ($this->profiler) {
            $this->profiler->profilerStart($this);
        }

        set_error_handler(function () {
        }, E_WARNING); // suppress warnings
        $response = db2_execute($this->resource, $this->parameterContainer->getPositionalArray());
        restore_error_handler();

        if ($this->profiler) {
            $this->profiler->profilerFinish();
        }

        if ($response === false) {
            throw new Exception\RuntimeException(db2_stmt_errormsg($this->resource));
        }

        $result = $this->driver->createResult($this->resource);
        return $result;
    }

    /**
     * Creates and returns a callable error handler that raises exceptions.
     *
     * Only raises exceptions for errors that are within the error_reporting mask.
     *
     * @return callable
     */
    private function createErrorHandler()
    {
        /**
         * @param int $errno
         * @param string $errstr
         * @param string $errfile
         * @param int $errline
         * @return void
         * @throws ErrorException if error is not within the error_reporting mask.
         */
        return function ($errno, $errstr, $errfile, $errline) {
            if (! (error_reporting() & $errno)) {
                // error_reporting does not include this error
                return;
            }

            throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
        };
    }
}
