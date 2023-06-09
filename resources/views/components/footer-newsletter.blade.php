<div class="border rounded-30 p-2">
    <h2 class="fs-20 fw-800 text-primary mb-0-50">Assine nossa newsletter!</h2>
    <div class="col-lg-12 mt-1">
        <input type="email" placeholder="Email*" class="form-control" wire:model.defer="phone" required>
    </div>
    <div class="col-12 d-flex justify-content-center mt-1">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" wire:model.defer="accept" id="termosCheck" required>
            <label class="form-check-label" for="termosCheck">
                <x-accept-text />
            </label>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-center justify-content-lg-start mt-1">
        <button type="submit" class="btn btn-primary rounded-30 px-2 text-white">
            <span wire:loading.remove>
                OK
            </span>
            <span wire:loading.inline>
                Aguarde...
            </span>
        </button>
    </div>
    <div class="col-12 d-none">
        <x-flash-messages />
    </div>
</div>