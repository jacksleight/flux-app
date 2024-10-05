<?php

use JackSleight\BladeTailor\Tailor;

Tailor::component('flux::*')
    ->replace([
        'dark:text-white' => 'dark:text-cyan-100',
        'dark:text-white/80' => 'dark:text-cyan-100',
        'dark:text-white/70' => 'dark:text-cyan-200/70',
        'dark:text-white/50' => 'dark:text-cyan-200/70',
        'dark:text-zinc-300' => 'dark:text-cyan-200/70',
        'data-[selected]:dark:text-white' => 'data-[selected]:dark:text-cyan-100',
        'dark:border-white/20' => 'dark:border-cyan-200/20',
        'dark:divide-white/20' => 'dark:divide-cyan-200/20',
    ])
    ->remove([
        'table-fixed',
    ]);

Tailor::component(['flux::header'])
    ->classes([
        'lg:px-6',
    ]);

Tailor::component(['flux::sidebar'])
    ->classes([
        'gap-2 !rounded-tr-none',
    ]);

Tailor::component(['flux::main'])
    ->classes([
        '!rounded-tl-none',
    ]);

Tailor::component(['flux::header', 'flux::sidebar'])
    ->classes([
        'dark:bg-transparent dark:bg-gradient-to-br dark:from-cyan-500/40',
    ]);

Tailor::component(['flux::header', 'flux::sidebar', 'flux::main'])
    ->classes([
        'border-2 dark:border-cyan-200',
        'shadow-glow',
        'rounded-2xl',
    ]);

Tailor::component(['flux::brand'])
    ->classes([
        '[&>*:nth-child(1)]:: hidden',
        '[&>*:nth-child(2)]:: text-xl text-cyan-100 pt-1 [text-shadow:0_0_10px_theme(colors.cyan.400)] px-4 -mx-4',
    ]);

Tailor::component(['flux::badge'])
    ->classes(fn ($color) => [
        match ($color) {
            'green' => 'dark:bg-[lime]/15 dark:text-[lime]',
            'yellow' => 'dark:bg-[yellow]/15 dark:text-[yellow]',
            'zinc' => 'dark:bg-cyan-200/15 dark:text-cyan-400',
            default => '',
        },
    ]);

Tailor::component(['flux::button'])
    ->props([
        'variant' => 'primary',
    ])
    ->classes(fn ($variant) => [
        match ($variant) {
            'primary' => 'dark:bg-cyan-300 dark:shadow-glow pt-0.5',
            default => '',
        },
    ]);

Tailor::component(['flux::input'])
    ->classes(fn ($variant) => [
        '[&_[data-flux-icon]]:: text-cyan-200',
        '[&_*:nth-child(2)]:: text-cyan-200/70',
        match ($variant) {
            'filled' => 'dark:bg-black/50 !shadow-drop',
            default => '',
        },
    ]);

Tailor::component(['flux::navlist'])
    ->classes([
        'dark:bg-black/50 rounded-lg py-2 grow',
        'shadow-drop divide-y dark:divide-cyan-100/10',
        '[&_[data-flux-navlist-item]]:: rounded-none px-4 h-10 mt-0',
        '[&_[data-flux-navlist-group]_button]:: px-1 h-10 !mb-0 items-center',
        '[&_[data-flux-navlist-group]_.relative]:: divide-y dark:divide-cyan-100/10',
        '[&_[data-flux-navlist-group]_.absolute]:: hidden',
        '[&_[data-flux-navlist-group]_[data-flux-navlist-item]]:: rounded-none h-auto !border-0 mt-0 mb-3',
    ]);

Tailor::component(['flux::tabs'])
    ->classes([
        '-mx-8 pt-12 -mt-12 h-auto px-4 dark:border-cyan-200 gap-1',
        'bg-gradient-to-t from-cyan-400/15',
    ]);

Tailor::component(['flux::tab'])
    ->classes([
        'border rounded-t-xl px-4 pt-3 pb-2',
        'data-[selected]:: dark:border-cyan-200 dark:border-b-black dark:bg-black',
    ]);

Tailor::component(['flux::heading'])
    ->classes([
        '[&:has(+[data-flux-subheading])]:mb-1',
        '[text-shadow:0_0_10px_theme(colors.cyan.400)]',
    ]);

Tailor::component(['flux::subheading'])
    ->classes([
        'text-base',
        '[[data-flux-heading].text-base+&]:: text-sm',
    ]);

Tailor::component(['flux::table'])
    ->classes([
        '[&_th]:: py-2',
        '[&_td]:: py-2',
    ]);

Tailor::component(['flux::column'])
    ->classes([
        'uppercase [text-shadow:0_0_10px_theme(colors.cyan.400)] text-sm dark:text-cyan-200',
    ]);
