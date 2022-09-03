
<form wire:submit.prevent="contactFormSubmit" action="/contact" method="POST">
    @csrf
    <div class="card-body">
        @if ($success)
            <div class="inline-flex w-full ml-3 overflow-hidden bg-white rounded-lg shadow-sm">
                <div class="flex items-center justify-center w-12 bg-green-500">
                </div>
                <div class="px-3 py-2 text-left">
                    <span class="font-semibold text-green-500">Success</span>
                    <p class="mb-1 text-sm leading-none text-gray-500">{{ $success }}</p>
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
            <div class="row mb-3">
                <div class='col'>
                    <textarea wire:model="comment" rows="8" class="form-control" name="comment" placeholder="Your message here...">{{ old('comment') }}</textarea>
                    @error('comment')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
    </div>
    <div class="card-footer d-flex">
        <button class="btn btn-primary col-auto mx-auto" type="submit">
            @include('common.icon', ['icon'=>'paper-plane']) Send
        </button>
    </div>
</form>