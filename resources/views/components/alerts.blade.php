<div class="main-alerts flex-grow-1" style="min-height:68px">
    @if (session('status') && count(session('status')))
        <div class="alert alert-dismissible alert-{{ session('status')['type'] }} {{ session('status')['icon'] }}"
             role="alert">
                {{ session('status')['message'] }}

                <button type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close"
                ><span aria-hidden="true">&times;</span></button>
        </div>
    @endif
</div>
