<?php

namespace Trov\WhitePages\Widgets;

use App\Models\WhitePage;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\DB;

class WhitePagesOverview extends Widget
{
    public $pages;

    protected static string $view = 'trov-whitepages::components.widgets.whitepages-overview';

    public function mount()
    {
        $this->pages = WhitePage::get(['type', 'status'])->groupBy(['type', 'status']);
    }
}
