<div class="col-12 col-sm-3">
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center flex-wrap gap-2">
                <div class="avatar me-3">
                    <div class="avatar-initial bg-label-primary rounded">
                        <i {{ $attributes->merge(['class' => 'mdi mdi-24px']) }}> </i>
                    </div>
                </div>
                <div class="card-info">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-0">{{$cardData}}</h4>
                        {{-- <i class="mdi mdi-chevron-down text-danger mdi-24px"></i> --}}
                    </div>
                    <small class="text-muted">{{$cardTitle}}</small>
                </div>
            </div>
        </div>
    </div>
</div>
