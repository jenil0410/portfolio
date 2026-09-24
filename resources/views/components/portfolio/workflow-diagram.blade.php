@props([
    'project',
    'activeFlowIndex' => null,
])

<div class="workflow-system workflow-{{ $project['slug'] }}" aria-label="{{ $project['name'] }} workflow diagram">
    <div class="workflow-meta">
        <span>SYSTEM RELATIONSHIPS</span>
        <span>CASE / {{ $project['number'] }}</span>
    </div>
    <div class="workflow-lines" aria-hidden="true">
        <i></i>
        <i></i>
        <i></i>
    </div>
    <div class="workflow-groups">
        @foreach($project['workflows'] as $flowIndex => $flow)
            <div class="workflow-row {{ $activeFlowIndex !== null && $activeFlowIndex !== $flowIndex ? 'opacity-40' : '' }}">
                <span class="flow-index">0{{ $flowIndex + 1 }}</span>
                <div>
                    @foreach($flow as $nodeIndex => $node)
                        <span class="workflow-node">
                            <b>{{ $node }}</b>
                            @if($nodeIndex < count($flow) - 1)
                                <i aria-hidden="true"></i>
                            @endif
                        </span>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
