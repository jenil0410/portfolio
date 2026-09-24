@props([
    'project',
    'type' => 'preview', // 'preview' | 'workflow' | 'interface'
])

@if($type === 'preview')
    <x-portfolio.project-preview :project="$project" />
@elseif($type === 'workflow')
    <x-portfolio.workflow-diagram :project="$project" />
@elseif($type === 'interface')
    <x-portfolio.interface-concept :project="$project" />
@endif
