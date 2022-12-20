<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Repositories\Interfaces\AdminRepositoryInterface;
use App\Message;
use Ap\Settings;

class GetMessages extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];
    public $reloadTimeout = 5;

    public function __construct(AdminRepositoryInterface $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

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
        $messages = Message::all()->take(-25);
        $settings = $this->adminRepository->getSettings(1);

        return view('widgets.get_messages', [
            'config' => $this->config,
            'messages' => $messages,
            'settings' => $settings
        ]);
    }
}
