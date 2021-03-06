<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overridding configuration values from modules, etc.  
 * You would place values in here that are agnostic to the environment and not 
 * sensitive to security. 
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source 
 * control, so do not include passwords or other sensitive information in this 
 * file.
 */

$blogName = 'igncode';
$blogTitle = 'IGN Engineering Blog';
$blogMetaDescription = 'IGN Engineers are always working with cutting edge technologies. Check back for updates on what we are working on, solutions to problems we\'ve faced, and other interesting tidbits from our team members.';
$peopleMetaDescrpiton = 'IGN Engineers are real people! We push code, contribute to open-source projects, speak at meetups, and play games.';

$config = array(
    'di' => array(
        'instance' => array(
            'Zend\Mvc\Router\RouteStack' => array(
                'parameters' => array(
                    'routes' => array(
                        'blog' => array(
                            'options' => array(
                                'defaults' => array(
                                    'blog_name' => $blogName,
                                    'headTitle' => $blogTitle,
                                    'headMeta-description' => $blogMetaDescription,
                                ),
                            ),
                        ),
                        'blog-post' => array(
                            'options' => array(
                                'defaults' => array(
                                    'blog_name' => $blogName,
                                    'headTitle' => $blogTitle,
                                    'headMeta-description' => $blogMetaDescription,
                                ),
                            ),
                        ),
                        'blog-author' => array(
                            'options' => array(
                                'route' => '/blog/author/:authorName',
                                'constraints' => array(
                                    'authorName' => '[a-zA-Z0-9_-]+',
                                ),
                                'defaults' => array(
                                    'controller' => 'Application\Controller\IndexController',
                                    'action'	 => 'blog-author',
                                ),
                            ),
                        ),
                        'people' => array(
                            'options' => array(
                                'defaults' => array(
                                    'headTitle'  => 'IGN Engineers',
                                    'headMeta-description' => $peopleMetaDescrpiton,
                                ),
                            ),
                        ),
                        'person' => array(
                            'options' => array(
                                'defaults' => array(
                                    'headTitle'  => 'IGN Engineers',
                                    'headMeta-description' => $peopleMetaDescrpiton,
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);

unset($blogName);
return $config;
