
<form wire:submit.prevent="contactFormSubmit" action="/contact" method="POST">
    @csrf
    <div class="card-body">
        <p>I am actively looking for new employment at this time.<br>If you are interested in hiring me please get in touch using the form below.</p>
        @if ($success)
            <div class="alert alert-success">
                <div class="row">
                    <div class="col">
                        <h5>Success</h5>
                        <div>{{ $success }}</div>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif
            <div class="row mb-3">
                <div class='col'>
                    <input wire:model="email" class="form-control" type="text" placeholder="Email Address" name="email" value="{{ old('email') }}" />
                    @error('email')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class='col'>
                    <input wire:model="name" class="form-control" type="text" placeholder="Name" name="name" value="{{ old('name') }}" />
                    @error('name')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class='col'>
                    <textarea wire:model="comment" rows="8" class="form-control" name="comment" placeholder="Your message here...">{{ old('comment') }}</textarea>
                    @error('comment')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
    </div>
    <div class="card-footer d-flex pt-0 border-0">
        <button class="btn btn-primary col-auto mx-auto" type="submit">
            @include('common.icon', ['icon'=>'paper-plane']) Send
        </button>
    </div>
</form>