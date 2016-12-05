<?php

namespace BlogBundle\Twig;

use Twig_SimpleFilter;
use Twig_SimpleFunction;

/**
 * Class BlogExtension
 */
class BlogExtension extends \Twig_Extension
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'blog_extension';
    }

    /**
     * Returns a list of filters to add to the existing list.
     *
     * @return Twig_SimpleFilter[]
     */
    public function getFilters()
    {
        return [
            new Twig_SimpleFilter('licence', [$this, 'licenceFilter']),
        ];
    }

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return Twig_SimpleFunction[]
     */
    function getFunctions()
    {
        return [
            new Twig_SimpleFunction('my_function', [$this, 'myFunction']),
        ];
    }

    /**
     * @param mixed $argument
     * @return string
     */
    public function licenceFilter($argument)
    {
        return "{$argument} (c)";
    }

    /**
     * @return string
     */
    public function myFunction()
    {
        return 'myFunction was called';
    }
}
