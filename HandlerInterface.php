<?php

/*
 * This File is part of the Lucid\Module\Event package
 *
 * (c) iwyg <mail@thomas-appel.com>
 *
 * For full copyright and license information, please refer to the LICENSE file
 * that was distributed with this package.
 */

namespace Lucid\Module\Event;

/**
 * @class HandlerInterface
 *
 * @package Lucid\Module\Event
 * @version $Id$
 * @author iwyg <mail@thomas-appel.com>
 */
interface HandlerInterface
{
    /**
     * Will be called on a specific event.
     *
     * @param EventInterface $event the event that's been dispatched.
     *
     * @return void
     */
    public function handleEvent(EventInterface $event);
}
