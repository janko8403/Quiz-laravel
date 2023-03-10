<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Message;

class RecentMessages extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];
    public $reloadTimeout = 10;

    public function placeholder()
    {
        return 'Loading...';
    }

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        
        $messages = Message::orderBy('id', 'desc')->take(20)->get();

        return view('widgets.recent_messages', [
            'config'   => $this->config,
            'messages' => $messages
        ]);
    }
}
