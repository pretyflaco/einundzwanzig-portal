<x-jet-authentication-card>
    <x-slot name="logo">
        <x-jet-authentication-card-logo/>
    </x-slot>

    <div wire:ignore>
        <div>
            <div class="flex justify-center" wire:key="qrcode">
                {!! $this->qrCode !!}
            </div>
            <div class="my-2 flex justify-center font-mono break-all">
                <span wire:key="lnurl">lightning:{{ $this->lnurl }}</span>
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-button icon="login" secondary class="ml-4" wire:click="switchToEmail">
                {{ __('Switch to E-Mail login') }}
            </x-button>

            <x-button icon="at-symbol" primary class="ml-4" wire:click="switchToEmail">
                {{ __('Switch to E-Mail signup') }}
            </x-button>

        </div>
    </div>
    <div wire:poll="checkAuth" wire:key="checkAuth"></div>
</x-jet-authentication-card>
