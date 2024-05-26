<div {{ $attributes->class(['card card-apply-job']) }}>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-1">
            <div class="d-flex flex-row">
                @isset($avatar)
                <div class="avatar me-1">
                    {{ $avatar }}
                </div>
                @endisset
                <div class="user-info">
                    <h5 class="mb-0">
                        {{ $title }}
                    </h5>
                    <small class="text-muted">
                        @isset($sub_title)
                            {{ $sub_title }}
                        @endisset
                    </small>
                </div>
            </div>

            @isset($label)
                    {{ $label }}
            @endisset
        </div>
        <h5 class="apply-job-title">
            {{ $headingContent }}
        </h5>
        <p class="card-text mb-2">{{ $slot }}</p>

        @isset($highlight)
            <div class="apply-job-package bg-light-primary rounded">
                <div>
                    <h4 class="d-inline me-25">{{ $highlight }}</h4>
                </div>
                {{ $highlight_value }}
            </div>
        @endisset

        @isset($action_button)
            <div class="d-grid">
                <div class="row">
                    {{ $action_button }}
                </div>
            </div>
        @endisset

    </div>
</div>
