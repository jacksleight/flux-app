<?php

use JackSleight\BladeTailor\Tailor;

Tailor::component('flux::*')
    ->replace([
        'dark:bg-white/10' => 'dark:bg-cyan-200/20',
        'dark:border-white/10' => 'dark:border-cyan-200/20',
        'dark:border-white/20' => 'dark:border-cyan-200/20',
        'dark:divide-white/20' => 'dark:divide-cyan-200/20',
        'dark:text-white' => 'dark:text-cyan-100',
        'dark:text-white/50' => 'dark:text-cyan-200/70',
        'dark:text-white/70' => 'dark:text-cyan-200/70',
        'dark:text-white/80' => 'dark:text-cyan-100',
        'dark:text-zinc-300' => 'dark:text-cyan-200/70',
        'data-[selected]:dark:text-white' => 'data-[selected]:dark:text-cyan-100',
        'rounded-md' => 'rounded-lg',
    ])
    ->remove([
        'table-fixed',
    ]);

Tailor::component('flux::header')
    ->root([
        'lg:px-6',
    ]);

Tailor::component('flux::sidebar')
    ->root([
        'gap-2 !rounded-tr-none',
    ]);

Tailor::component('flux::main')
    ->root([
        '!rounded-tl-none',
    ]);

Tailor::component(['flux::header', 'flux::sidebar'])
    ->root([
        'dark:bg-transparent dark:bg-gradient-to-br dark:from-cyan-500/40 dark:to-cyan-500/10',
    ]);

Tailor::component(['flux::header', 'flux::sidebar', 'flux::main'])
    ->root([
        'border-2 dark:border-cyan-200',
        'shadow-glow',
        'rounded-2xl',
    ]);

Tailor::component('flux::brand')
    ->tag('div#1', [
        'hidden',
    ])
    ->tag('div#2', [
        'text-xl dark:text-cyan-100 text-shadow-glow p-4 -m-4 pt-5',
    ]);

Tailor::component('flux::badge')
    ->root(fn ($color) => [
        match ($color) {
            'green' => 'dark:bg-[lime]/15 dark:text-[lime]',
            'yellow' => 'dark:bg-[yellow]/15 dark:text-[yellow]',
            'zinc' => 'dark:bg-cyan-200/15 dark:text-cyan-300',
            default => '',
        },
    ]);

Tailor::component('flux::button')
    ->props([
        'variant' => 'primary',
    ])
    ->root(fn ($variant) => [
        match ($variant) {
            'primary' => 'dark:bg-cyan-300 !shadow-glow pt-0.5',
            default => '',
        },
    ]);

Tailor::component('flux::input')
    ->root(fn ($variant) => [
        match ($variant) {
            'filled' => 'dark:bg-black/50 !shadow-drop',
            default => '',
        },
    ])
    ->slot('iconLeading', [
        'text-cyan-200',
    ])
    ->tag('div#9', [
        'dark:text-cyan-200/70',
    ]);

Tailor::component('flux::navlist')
    ->root([
        'dark:bg-black/50 rounded-lg py-2 grow',
        'shadow-drop divide-y dark:divide-cyan-100/10',
    ]);

Tailor::component('flux::navlist.item')
    ->root([
        'rounded-none px-4 h-10 mt-0',
    ])
    ->tag('span#1', [
        'dark:bg-cyan-300 shadow-glow dark:text-black',
    ]);

Tailor::component('flux::navlist.group')
    ->tag('button#1', [
        'px-1 h-10 !mb-0 items-center',
    ])
    ->tag('div#2', [
        'space-y-2 -mt-1.5',
    ])
    ->tag('div#3', [
        'hidden',
    ]);

Tailor::component('flux::navlist.item')
    ->parent('flux::navlist.group')
    ->root([
        'lg:h-auto opacity-50',
    ]);

Tailor::component('flux::tabs')
    ->root([
        '-mx-8 pt-12 -mt-12 h-auto px-4 dark:border-cyan-200 gap-1',
        'bg-gradient-to-t from-cyan-400/15',
    ]);

Tailor::component('flux::tab')
    ->root([
        'border rounded-t-lg px-4 pt-3 pb-2 relative',
        'data-[selected]:: dark:border-cyan-200 dark:border-b-black dark:bg-black',
    ]);

Tailor::component('flux::heading')
    ->root([
        '[&:has(+[data-flux-subheading])]:mb-1',
        'text-shadow-glow',
    ]);

Tailor::component('flux::subheading')
    ->root([
        'text-base',
        '[[data-flux-heading].text-base+&]:: text-sm',
    ]);

Tailor::component('flux::column')
    ->root([
        'py-2',
    ]);

Tailor::component('flux::cell')
    ->root([
        'py-2',
    ]);

Tailor::component('flux::column')
    ->root([
        'uppercase text-shadow-glow text-sm dark:text-cyan-200',
    ]);
