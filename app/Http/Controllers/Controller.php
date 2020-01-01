<?php

namespace App\Http\Controllers;

use App\Util\Notifications\Notifier;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Notifier;

    /** @var \App\Util\DB\TableAnalyzer */
    protected $analyzer;

    /** @var \App\Family */
    protected $model;

    /** @var string */
    protected $single = '';
    protected $resource = '';
    protected $icon = '';
    protected $dtDefs = '{"columnDefs":[{"targets": 3,"orderable": false}]}';

    /** @var array */
    protected $fields = [];
}
