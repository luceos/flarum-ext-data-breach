<?php

namespace Luceos\Breached;

use Flarum\User\User;
use Illuminate\Console\Command;

class ReporterCommand extends Command
{
    protected $signature = 'luceos:breached';
    protected $description = 'Generates summarized information of complete user database for reporting purposes.';
    
    public function handle()
    {
        
        User::query()
            ->with(['posts' => function ($query) {
                $query->latest()->with('ip_info')->first();
            }])
            ->orderBy('id')
            ->each(fn($user) => dd($user));
    }
}