<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\Setting;
use Dcat\Admin\Widgets\Card;
use Dcat\Admin\Layout\Content;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
     /**
     * 版本号.
     *
     * @var string
     */
    const VERSION = '1.11.11';

    public function index(Content $content)
    {
        return $content
            ->title('網站配置')
            ->description('列表')
            ->body(new Card(new Setting()));
    }

}