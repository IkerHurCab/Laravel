
    <div class=" p-6 rounded-lg">
        <h1 class="text-2xl font-semibold text-red-700 mb-4">{{ __('Borrar cuenta') }}</h1>
        <p class="text-gray-700 text-lg mb-4">{{ __('Eliminar permanentemente su cuenta.') }}</p>

        <div class="max-w-xl text-sm text-gray-600 mb-4 text-justify">
            {{ __('Una vez que su cuenta sea eliminada, todos sus recursos y datos serán eliminados permanentemente. Antes de eliminar su cuenta, por favor descargue cualquier dato o información que desee conservar.') }}
        </div>

        <div class="mt-5 flex justify-center">
            <x-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Borrar cuenta') }}
            </x-danger-button>
        </div>

        <x-dialog-modal wire:model.live="confirmingUserDeletion">
            <x-slot name="title">
                <h2 class="text-xl font-semibold text-red-700">{{ __('Borrar cuenta') }}</h2>
            </x-slot>

            <x-slot name="content">
                <p class="text-gray-700 text-lg">
                    ¿Está seguro de que desea eliminar su cuenta? Una vez que su cuenta sea eliminada, todos sus recursos y datos serán eliminados permanentemente. Por favor, ingrese su contraseña para confirmar que desea eliminar su cuenta de forma permanente.
                </p>

                <div class="mt-4" x-data="{}"
                    x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)"></div>
                    <x-input type="password" class="mt-1 block w-3/4 mx-auto" autocomplete="current-password"
                        placeholder="{{ __('Contraseña') }}" x-ref="password" wire:model="password"
                        wire:keydown.enter="deleteUser" />
                    <x-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <div class="flex justify-end">
                    <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                        {{ __('Cancel') }}
                    </x-secondary-button>

                    <x-danger-button class="ms-3" wire:click="deleteUser" wire:loading.attr="disabled">
                       Borrar cuenta
                    </x-danger-button>
                </div>
            </x-slot>
        </x-dialog-modal>
    </div>

